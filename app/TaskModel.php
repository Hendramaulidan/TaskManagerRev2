<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
USE Illuminate\Database\Eloquent\SoftDeletes;

class TaskModel extends Model
{
    use SoftDeletes;
    protected $table = 'tasks';
    protected $fillable = ['namaTask','kegiatan'];
    protected $dates = ['deleted_at'];
    
}
