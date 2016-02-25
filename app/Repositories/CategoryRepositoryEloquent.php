<?php

namespace App\Repositories;

use App\Eloquent\Category;
use App\Repositories\Contracts\CategoryRepository;

class CategoryRepositoryEloquent extends AbstractRepositoryEloquent implements CategoryRepository
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function posts($columns = ['*'])
    {
        return $this->model->where('type','post')->get($columns);
    }

    public function type($type, $columns = ['*'])
    {
    	return $this->model->where('type',$type)->with('children')->get($columns);
    }

    public function rootWithType($type, $columns = ['*'])
    {
        return $this->model->where('type', $type)->with('children')->where('parent_id',0)->get($columns);
    }

    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }
}
