<?php

namespace Yanntyb\App\Controller;


use RedBeanPHP\R;
use Twig\Error\Error;
use Yanntyb\App\Classes\Controller;
use Yanntyb\App\Classes\Entity\Article;
use Yanntyb\App\Classes\Entity\User;
use Yanntyb\Populate\Model\Classes\Populate;

class UserController extends Controller
{
    protected function getAll(): array
    {
        $users = [];
        foreach(R::findAll("user") as $bean){
            $articlesBean = R::findAll("article","user_fk = ?", [$bean->id]);
            $users[] = (new User())->setId($bean->id)->setName($bean->name)->setArticles($articlesBean);
        }
        return $users;
    }

    public function showPage(){
        try{
            $this->render("users/users.html.twig", [
                "users" => $this->getAll(),
            ]);
        }
        catch (Error $e) {
            echo $e->getMessage();
        }
    }

    public function info(int $id){
        $userBean = R::findOne("user","id = ?",[$id]);
        if(!is_null($userBean)){
            $articlesBean = R::findAll("article", "user_fk = ?",[$id]);
            $articles = [];
            foreach($articlesBean as $articleBean){
                $articles[] = (new Article())->setId($articleBean->id)->setTitle($articleBean->title);
            }
            $user = (new User())->setName($userBean->name)->setId($userBean->id)->setArticles($articles)->setPass($userBean->password);
            $this->render("users/single.html.twig",["user" => $user]);
        }
        else{
            $this->showPage();
        }
    }

    public function delete(int $id){
        $article = R::findOne("user","id = ?",[$id]);
        R::trash($article);
        $this->showPage();
    }

    public function populate(){
        $maker = Populate::maker("user");
        $maker->populate(10,[
            [
                "type" => "string",
                "name" => "name",
                "len" => 10
            ]
        ]);
        $this->showPage();
    }

    public function edit($id){
        $userBean = R::findOne("user","id = ?",[$id]);
        if(!is_null($userBean)){
            $articlesBean = R::findAll("article", "user_fk = ?",[$id]);
            $articles = [];
            foreach($articlesBean as $articleBean){
                $articles[] = (new Article())->setId($articleBean->id)->setTitle($articleBean->title);
            }
            $user = (new User())->setName($userBean->name)->setId($userBean->id)->setArticles($articles)->setPass($userBean->password);
            $this->render("users/edit.html.twig",["user" => $user]);
        }
        else{
            $this->showPage();
        }
    }

    public function update(){
        if(isset($_POST["id"])){
            $user = R::findOne("user","id = ?", [$_POST["id"]]);
            if($user){
                $user->password = $_POST["pass"];
                $user->name = $_POST["name"];
                R::store($user);
                $this->edit($user->id);
                return null;
            }
        }
        $this->showPage();
    }
}