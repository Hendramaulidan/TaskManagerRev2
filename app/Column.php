<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $table = 'columns';
    protected $fillable = ['status','email'];
    public function tasks()
    {
    	return $this->hasMany(Task::class);
    }
}
