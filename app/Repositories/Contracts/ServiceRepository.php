<?php

namespace App\Repositories\Contracts;

interface ServiceRepository extends AbstractRepository
{
	public function getHome($limit, $columns = ['*']);

	public function type($type, $limit = 5, $columns = ['*']);
}
