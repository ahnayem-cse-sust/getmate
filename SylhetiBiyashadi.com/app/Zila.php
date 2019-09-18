<?php

namespace App;

use App\Zila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Zila extends Authenticatable
{
    protected $guarded = ['id']; 
}