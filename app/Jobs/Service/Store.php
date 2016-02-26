<?php

namespace App\Jobs\Service;

use App\Jobs\Job;
use App\Repositories\Contracts\ServiceRepository;

class Store extends Job
{
    protected $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function handle(ServiceRepository $repository)
    {
    	if (isset($this->attributes['icon_fa'])) {
            $path = strtolower(class_basename($repository->getModel()));
            $this->attributes['icon_fa'] = $this->setImage($this->attributes['icon_fa'],$path);
        }
        $repository->create($this->attributes);
    }
}
