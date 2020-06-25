<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//propiedad fillable es para salvar datos de forma masiva
    protected $fillable = [

    'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'

    ];


    public function user(){

    return $this->belongsTo(User::class);

    }


    public function category(){

    return $this->belongsTo(Category::class);

    }




    public function tags(){

      return $this->belongsToMany(Tag::class)->withTimestamps();

    }
}
