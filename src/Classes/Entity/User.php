<?php

namespace Yanntyb\App\Classes\Entity;

class User
{
    private int $id;
    private string $name;
    private array $articles;
    private string $pass;

    /**
     * @return array
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * @param array $articles
     * @return self
     */
    public function setArticles(array $articles): self
    {
        $this->articles = $articles;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     * @return self
     */
    public function setPass(string $pass): self
    {
        $this->pass = $pass;
        return $this;
    }

}