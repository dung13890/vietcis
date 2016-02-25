<?php

namespace App\Repositories;

use App\Eloquent\Partner;
use App\Repositories\Contracts\PartnerRepository;

class PartnerRepositoryEloquent extends AbstractRepositoryEloquent implements PartnerRepository
{
    public function __construct(Partner $model)
    {
        parent::__construct($model);
    }

    public function getHome($limit, $columns = ['*'])
    {
    	return $this->model->orderBy('id','DESC')->take($limit)->get($columns);
    }
}
