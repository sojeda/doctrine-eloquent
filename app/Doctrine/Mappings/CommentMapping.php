<?php

namespace App\Doctrine\Mappings;

use App\Entities\Article;
use App\Entities\Comment;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class CommentMapping extends EntityMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return Comment::class;
    }

    /**
     * Load the object's metadata through the Metadata Builder object.
     *
     * @param Fluent $builder
     */
    public function map(Fluent $builder)
    {
        /*
         * Here we'll map each field in the object.
         * Right now we'll just add the single "id" field as an "increments" type: that's our shortcut to
         * tell Doctrine to do an auto-incrementing, unsigned, primary integer field.
         * We could also do `bigIncrements('id')` or the whole `integer('id')->primary()->unsigned()->autoIncrement()`
         */
        $builder->increments('id');
        $builder->text('message');
        $builder->manyToOne(Article::class, 'article');
    }
}
