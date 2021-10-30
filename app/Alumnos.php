<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Alumnos extends Model
{   
    
    protected $table = "alumnos";
    protected $guarded = ['is_admin'];
    
}