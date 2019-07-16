<?php

namespace Chuti\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =[
        'message' ,'email' ,'name'
    ];
}
