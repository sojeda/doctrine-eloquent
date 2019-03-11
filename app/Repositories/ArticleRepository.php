<?php

namespace App\Repositories;

interface ArticleRepository
{
    public function find($id);

    public function findByName(string $name);

    public function all();
}
