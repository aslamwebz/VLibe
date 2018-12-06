<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $fillable = [
    	'name', 'description', 'code', 'language'
    ];
}