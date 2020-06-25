<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

  //propiedad fillable es para salvar datos de forma masiva
      protected $fillable = [

      'name', 'slug'

      ];


      public function posts(){
  //Post es la entidad y ->withTimestamps(); solo se agrego'por un comentario en vdo5
        return $this->belongsToMany(Post::class)->withTimestamps();

      }


}
