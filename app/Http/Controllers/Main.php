<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Main extends Controller
{
    public function index()
    {
    	$table = DB::table('tasks')->join('columns','tasks.status','=','columns.task_id')->where('user_id',Auth::user()->id)->get();
    	return view('nyacak',compact('table'));
    }
}
