<?php

namespace App\Http\Controllers;

use App\Entities\Article;
use App\Entities\Comment;
use App\Repositories\ArticleRepository;
use App\Repositories\BasicPersistRepository;

class ArticleController extends Controller
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;
    /**
     * @var BasicPersistRepository
     */
    private $persistRepository;

    public function __construct(ArticleRepository $articleRepository, BasicPersistRepository $persistRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->persistRepository = $persistRepository;
    }

    public function index()
    {
        dd($this->articleRepository->all());
    }

    public function create()
    {
        $title = 'Titulo';
        $content = 'Soy un contenido';

        $article = new Article($title, $content);

        $article->addComment(new Comment($article, 'Soy un comentario'));

        $this->persistRepository->persist($article);
    }

    public function addComment(int $id)
    {
        $article = $this->articleRepository->find($id);
        $comment = new Comment($article, 'Soy otro commentario');
        $this->persistRepository->persist($comment);
    }
}
