<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuery extends Model
{
  // fillables
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
