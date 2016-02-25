<?php

namespace App\Jobs\Service;

use App\Jobs\Job;
use App\Repositories\Contracts\ServiceRepository;
use Illuminate\Database\Eloquent\Model;

class Delete extends Job
{
    protected $entity;

    public function __construct(Model $entity)
    {
        $this->entity = $entity;
    }

    public function handle(ServiceRepository $repository)
    {
        $repository->delete($this->entity);
    }
}
