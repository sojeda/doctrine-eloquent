<?php

namespace App\Doctrine\Repositories;

use App\Repositories\ArticleRepository;
use Doctrine\ORM\EntityRepository;

class DoctrineArticleRepository extends EntityRepository implements ArticleRepository
{
    public function findByName(string $name)
    {
        return $this->findBy(['name' => $name]);
    }

    public function all()
    {
        return $this->findAll();
    }
}
