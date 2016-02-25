<?php

namespace App\Jobs\Partner;

use App\Jobs\Job;
use App\Repositories\Contracts\PartnerRepository;
use Illuminate\Database\Eloquent\Model;

class Delete extends Job
{
    protected $entity;

    public function __construct(Model $entity)
    {
        $this->entity = $entity;
    }

    public function handle(PartnerRepository $repository)
    {
        if (!empty($this->entity->logo)) {
            $this->destroyImage($this->entity->logo);
        }
        $repository->delete($this->entity);
    }
}
