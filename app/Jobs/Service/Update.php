<?php

namespace App\Jobs\Service;

use App\Jobs\Job;
use App\Repositories\Contracts\ServiceRepository;
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

    public function handle(ServiceRepository $repository)
    {
        if (isset($this->attributes['icon_fa'])) {
            $path = strtolower(class_basename($repository->getModel()));
            if (!empty($this->entity->icon_fa)) {
                $this->destroyImage($this->entity->icon_fa);
            }
            $this->attributes['icon_fa'] = $this->setImage($this->attributes['icon_fa'],$path);
        }
        $repository->update($this->entity, $this->attributes);
    }
}
