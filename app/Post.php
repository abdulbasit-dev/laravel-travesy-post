<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use SoftDeletes;

  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function truncate($post)
  {
    return substr($post->body, 0, 80) . ' ...';
  }
}
