<?php

namespace App\Eloquent;

class Post extends Abstracts\Sluggable
{
    protected $fillable = [
        'name','description','image','intro','content','tags','title','keywords','status','user_id',
    ];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to' => 'slug',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}