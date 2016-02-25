<?php

namespace App\Repositories;

use App\Eloquent\Service;
use App\Repositories\Contracts\ServiceRepository;

class ServiceRepositoryEloquent extends AbstractRepositoryEloquent implements ServiceRepository
{
    public function __construct(Service $model)
    {
        parent::__construct($model);
    }

    public function getHome($limit, $columns = ['*'])
    {
    	return $this->model->where('order','>',0)->orderBy('order')->take($limit)->get($columns);
    }

    public function type($type, $limit = 5, $columns = ['*'])
    {
    	return $this->model->where('type',$type)->orderBy('id','DESC')->take($limit)->get($columns);
    }
}
