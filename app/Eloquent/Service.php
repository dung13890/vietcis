<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'icon_fa','link','description','order'
    ];
}
