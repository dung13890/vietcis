<?php

namespace App\Repositories;

use App\Eloquent\Post;
use App\Repositories\Contracts\PostRepository;

class PostRepositoryEloquent extends AbstractRepositoryEloquent implements PostRepository
{
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }

    public function getHome($limit, $columns = ['*'])
    {
    	return $this->model->with('user')->where('status','1')->orderBy('id','DESC')->take($limit)->get($columns);
    }

    public function postRandom($limit, $columns = ['*'])
    {
    	return $this->model->orderByRaw("RAND()")->take($limit)->get($columns);
    }

    public function search($value, $columns = ['*'])
    {
        return $this->model->where('name','LIKE','%'.$value.'%')
        ->orWhere('title','LIKE','%'.$value.'%')
        ->orWhere('keywords','LIKE','%'.$value.'%')
        ->orWhere('tags','LIKE','%'.$value.'%')
        ->orWhere('description','LIKE','%'.$value.'%')
        ->orderBy('id','DESC')->take(10)->get($columns);
    }
}
