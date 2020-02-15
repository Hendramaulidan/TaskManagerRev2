<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'columns';
	protected $fillable = ['status','email'];
}
