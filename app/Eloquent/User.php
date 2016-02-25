<?php

namespace App\Eloquent;

class User extends Abstracts\Authenticatable
{
    protected $fillable = [
        'name','username', 'email', 'password','image','phone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
