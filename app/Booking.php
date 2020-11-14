<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
  use SoftDeletes;

  protected $guarded = [];

  function relationpackagecategorytable()
    {
      return $this->hasOne('App\Packagecategory', 'id', 'category_id');
    }
    function relationtimestable()
    {
      return $this->hasOne('App\Time','id','times_id');
    }
  function relationpackagetable()
    {
      return $this->hasOne('App\Package', 'id', 'package_id');
    }
}
