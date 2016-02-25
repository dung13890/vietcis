<?php

namespace App\Services;

use App\Services\Contracts\ServiceService;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\Service\Store;
use App\Jobs\Service\Update;
use App\Jobs\Service\Delete;

class ServiceServiceJob extends AbstractServiceJob implements ServiceService
{
	public function store(array $attributes)
	{
		return $this->dispatch(new Store($attributes));
	}

	public function update(Model $entity, array $attributes)
	{
		return $this->dispatch(new Update($entity, $attributes));
	}

	public function delete(Model $entity)
	{
		return $this->dispatch(new Delete($entity));
	}
}
