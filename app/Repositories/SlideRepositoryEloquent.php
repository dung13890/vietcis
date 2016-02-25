<?php

namespace App\Repositories;

use App\Eloquent\Slide;
use App\Repositories\Contracts\SlideRepository;

class SlideRepositoryEloquent extends AbstractRepositoryEloquent implements SlideRepository
{
    public function __construct(Slide $model)
    {
        parent::__construct($model);
    }

    public function all($columns = ['*'])
    {
        return $this->model->where('type','slide')->get($columns);
    }

    public function home($columns = ['*'])
    {
        return $this->model->where('type','home')->orderBy('order')->get($columns);
    }

    public function getHome($limit, $columns = ['*'])
    {
    	return $this->model->where('status','1')->where('type','slide')->orderBy('id','DESC')->take($limit)->get($columns);
    }

    public function settingHome($limit, $columns = ['*'])
    {
    	return $this->model->where('status','1')->where('type','home')->orderBy('order')->take($limit)->get($columns);
    }
}
