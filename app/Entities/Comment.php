<?php

namespace App\Entities;

class Comment
{
    /** @var  int */
    protected $id;

    /**
     * @var string
     */
    private $message;

    /** @var Article */
    private $article;

    public function __construct(Article $article, string $message)
    {
        $this->article = $article;
        $this->message = $message;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getArticle(): Article
    {
        return $this->article;
    }
}
