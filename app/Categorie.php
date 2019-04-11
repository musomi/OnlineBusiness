<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
  public $primaryKey='category_id';

  protected $fillable = [
        'category_name','created_at','updated_at','trashed','register_user'
    ];
}
