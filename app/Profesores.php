<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    protected $table = "profesor";
    protected $guarded = ['is_admin'];
}