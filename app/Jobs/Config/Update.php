<?php

namespace App\Jobs\Config;

use App\Jobs\Job;
use App\Repositories\Contracts\ConfigRepository;
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

    public function handle(ConfigRepository $repository)
    {
        if (isset($this->attributes['logo1'])) {
            $path = strtolower(class_basename($repository->getModel()));
            if (!empty($this->entity->logo1)) {
                $this->destroyImage($this->entity->logo1);
            }
            $this->attributes['logo1'] = $this->setImage($this->attributes['logo1'],$path);
        }

        if (isset($this->attributes['logo2'])) {
            $path = strtolower(class_basename($repository->getModel()));
            if (!empty($this->entity->logo2)) {
                $this->destroyImage($this->entity->logo2);
            }
            $this->attributes['logo2'] = $this->setImage($this->attributes['logo2'],$path);
        }
        
        $repository->update($this->entity, $this->attributes);
    }
}
