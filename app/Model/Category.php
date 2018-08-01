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
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    //get children category
    public function children(){
        return $this->hasMany(self::class, 'parent_id');
    }
}
