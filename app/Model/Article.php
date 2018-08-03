<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Article extends Model
{
    //Mass assigned
    protected $fillable = ['title', 'slug', 'short_description', 'description', 'image', 'meta_title', 'meta_description', 'meta_keywords', 'published', 'viewed', 'created_by', 'modified_by'];

    //Mutators
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40), '-');
    }

    //Polymorphic relations with categories
    public function categories(){
        return $this->morphToMany('App\Model\Category', 'categoryable');
    }

    public function scopeLastArticles($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
