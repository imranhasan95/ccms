<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
  use SoftDeletes;

  protected $guarded = [];

  function relationcategorytable()
    {
      return $this->hasOne('App\Packagecategory', 'id', 'category_id');
    }
}
