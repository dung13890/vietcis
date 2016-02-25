<?php

namespace App\Repositories\Contracts;

interface SlideRepository extends AbstractRepository
{
	public function getHome($limit, $columns = ['*']);

	public function settingHome($limit, $columns = ['*']);

	public function home($columns = ['*']);
}
