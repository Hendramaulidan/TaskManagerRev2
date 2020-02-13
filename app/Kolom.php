<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kolom extends Model
{
    protected $table = 'columns';
    public function status()
    {
    	return $this->hasMany('App/status');
    }
}
