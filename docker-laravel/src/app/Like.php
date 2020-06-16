<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  protected $fillable = [''];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function post()
  {
    return $this->belongsTo('App\Post');
  }
}
