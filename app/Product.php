<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $primaryKey='product_id';

  protected $fillable = [
        'category_id','product_name','image','description','sub_category_id','quantity','created_at','updated_at','register_user'
    ];
}
