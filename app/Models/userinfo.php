<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    use HasFactory;
    protected $table = 'userinfo';
    protected $filllabel = ['name','email','password'];
}
