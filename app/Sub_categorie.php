<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_categorie extends Model
{
  public $primaryKey='sub_category_id';

  protected $fillable = [
        'sub_category_name','category_id','created_at','updated_at'
    ];
}
