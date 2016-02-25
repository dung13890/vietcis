<?php

namespace App\Eloquent;

class Category extends Abstracts\Sluggable
{
	protected $fillable = [
        'type', 'name', 'parent_id', 'description'
    ];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to' => 'slug',
    ];
    
    public function posts()
    {
        return $this->belongsToMany(Post::class)->orderBy('id','DESC');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }
}
