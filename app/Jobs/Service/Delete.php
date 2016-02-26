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
    	if (!empty($this->entity->icon_fa)) {
            $this->destroyImage($this->entity->icon_fa);
        }
        $repository->delete($this->entity);
    }
}
