<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
    'title','description','keywords',
    'facebook','youtube','twitter','google',
    'email','phone','address','timeword',
    'office','staff','born','copyright',
    'countdown','note','content','introleft','introright','logo1','logo2'
    ];

    public $timestamps = false;
}
