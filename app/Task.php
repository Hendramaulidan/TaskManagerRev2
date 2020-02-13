<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['kegiatan','name_task'];
    public function columns()
    {
    	return  $this->belongsTo(Column::class);
    }
}
