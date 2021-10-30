<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $table = "notas";
    protected $guarded = ['is_admin'];
}