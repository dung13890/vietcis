<?php

namespace App\Repositories\Contracts;

interface CategoryRepository extends AbstractRepository
{
   public function posts($columns = ['*']);

   public function type($type, $columns = ['*']);

   public function rootWithType($type, $columns = ['*']);

   public function findBySlug($slug);
}
