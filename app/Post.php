<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Authenticatable
{
    protected $fillable = [
        'title',
        'body',
        'image',
        'deadline',
        'material',
        'amount', 
        'frequency',
        'asking_price',
        'first_delivery_date', 
        'finished_use', 
        'user_id', 
    ];

}
