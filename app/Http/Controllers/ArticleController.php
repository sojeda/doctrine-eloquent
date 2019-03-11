<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;

class ArticleController extends Controller
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        dd($this->articleRepository->all());
    }
}
