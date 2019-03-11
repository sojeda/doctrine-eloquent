<?php

namespace App\Http\Controllers;

use App\Entities\Article;
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

        $this->persistRepository->persist($article);
    }
}
