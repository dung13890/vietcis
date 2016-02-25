<?php

namespace App\Jobs\Category;

use App\Jobs\Job;
use App\Repositories\Contracts\CategoryRepository;
use Illuminate\Database\Eloquent\Model;

class Delete extends Job
{
    protected $entity;

    public function __construct(Model $entity)
    {
        $this->entity = $entity;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CategoryRepository $repository)
    {
        $repository->delete($this->entity);
    }
}
