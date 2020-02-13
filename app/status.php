<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
	protected $table = 'task';
    public function kolom()
 	{	
    	return $this->belongsTo('App/Kolom');
    }
}
