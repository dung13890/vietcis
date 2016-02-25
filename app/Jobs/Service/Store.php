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
        $repository->create($this->attributes);
    }
}
