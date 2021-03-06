<?php

namespace App\Jobs\Partner;

use App\Jobs\Job;
use App\Repositories\Contracts\PartnerRepository;
use Illuminate\Database\Eloquent\Model;

class Update extends Job
{
    protected $attributes;

    protected $entity;

    public function __construct(Model $entity, array $attributes)
    {
        $this->attributes = $attributes;
        $this->entity = $entity;
    }

    public function handle(PartnerRepository $repository)
    {
        if (isset($this->attributes['logo'])) {
            $path = strtolower(class_basename($repository->getModel()));
            if (!empty($this->entity->logo)) {
                $this->destroyImage($this->entity->logo);
            }
            $this->attributes['logo'] = $this->setImage($this->attributes['logo'],$path);
        }
        $repository->update($this->entity, $this->attributes);
    }
}
