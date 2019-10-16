<?php

namespace App;

use App\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Upazila extends Authenticatable
{
    protected $guarded = ['id']; 
}
