<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'name','image','status','type','order','link','description'
    ];
}
