<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name','logo','order','description','link'
    ];
}
