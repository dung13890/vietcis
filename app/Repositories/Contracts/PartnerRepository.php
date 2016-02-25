<?php

namespace App\Repositories\Contracts;

interface PartnerRepository extends AbstractRepository
{
	public function getHome($limit, $columns = ['*']);
}
