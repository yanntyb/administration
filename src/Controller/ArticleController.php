<?php

namespace Yanntyb\App\Controller;

use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;
use Twig\Error\Error;
use Yanntyb\App\Classes\Controller;
use Yanntyb\App\Classes\Entity\Article;
use Yanntyb\App\Classes\Entity\User;
use Yanntyb\Populate\Model\Classes\Populate;
use Yanntyb\Populate\Model\Classes\PopulateNotSetup;

class ArticleController extends Controller
{

    protected function getAll(): array
    {
        $articles = [];
        foreach(R::findAll("article") as $bean){
            $userBean = R::findOne("user","id = ?", [$bean->user_fk]);
            $user = (new User())->setId($userBean->id)->setName($userBean->name);
            $articles[] = (new Article())->setId($bean->id)->setContent($bean->content)->setTitle($bean->title)->setUser($user);
        }
        return $articles;
    }

    public function showPage(){
        $this->render("articles/articles.html.twig", [
            "articles" => $this->getAll(),
        ]);
    }

    /**
     * @throws SQL
     * @throws PopulateNotSetup
     */
    public function populate(){
        $maker = Populate::maker("article");
        $maker->populate(10,[
            [
                "type" => "string",
                "name" => "content",
                "len" => 300
            ],
            [
                "type" => "string",
                "name" => "title",
                "len" => 20
            ],
            [
                "type" => "fk",
                "name" => "user_fk",
                "table" => "user"
            ]
        ]);
        $this->showPage();
    }

    public function info(int $id){
        $articleBean = R::findOne("article","id = ?",[$id]);
        if(!is_null($articleBean)){
            $userBean = R::findOne("user", "id = ?",[$articleBean->user_fk]);
            $user = (new User())->setName($userBean->name)->setId($userBean->id);
            $article = (new Article())->setUser($user)->setId($articleBean->id)->setTitle($articleBean->title)->setContent($articleBean->content);
            $this->render("articles/single.html.twig",["article" => $article]);
        }
        else{
            $this->showPage();
        }
    }

    public function delete(int $id){
        $article = R::findOne("article","id = ?",[$id]);
        R::trash($article);
        $this->showPage();
    }

    public function edit(int $id){
        $articleBean = R::findOne("article","id = ?",[$id]);
        if(!is_null($articleBean)){
            $article = (new Article())->setId($articleBean->id)->setTitle($articleBean->title)->setContent($articleBean->content);
            $this->render("articles/edit.html.twig",["article" => $article]);
        }
        else{
            $this->showPage();
        }
    }

    public function update(){
        if(isset($_POST["id"])){
            $article = R::findOne("article","id = ?", [$_POST["id"]]);
            if($article){
                $article->title = $_POST["title"];
                $article->content = $_POST["content"];
                R::store($article);
                $this->edit($article->id);
                return null;
            }
        }
        $this->showPage();
    }
}