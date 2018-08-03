<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Category extends Model
{
    //Mass assigned
    protected $fillable = ['title', 'slug', 'published', 'parent_id', 'created_by', 'modified_by'];

    //Mutators
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40), '-');
    }

    //get children category
    public function children(){
        return $this->hasMany(self::class, 'parent_id');
    }

    //Polymorphic relations with articles
    public function articles(){
        return $this->morphedByMany('App\Model\Article', 'categoryable');
    }

    public function scopeLastCategories($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
