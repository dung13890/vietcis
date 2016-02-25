<?php

namespace App\Services;

use App\Services\Contracts\PartnerService;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\Partner\Store;
use App\Jobs\Partner\Update;
use App\Jobs\Partner\Delete;

class PartnerServiceJob extends AbstractServiceJob implements PartnerService
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
