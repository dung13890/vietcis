<?php

namespace App\Jobs\Partner;

use App\Jobs\Job;
use App\Repositories\Contracts\PartnerRepository;

class Store extends Job
{
    protected $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function handle(PartnerRepository $repository)
    {
        if (isset($this->attributes['logo'])) {
            $path = strtolower(class_basename($repository->getModel()));
            $this->attributes['logo'] = $this->setImage($this->attributes['logo'],$path);
        }
        $repository->create($this->attributes);
    }
}
