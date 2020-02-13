<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Kolom;
use App\TaskModel;

class Column extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $kolom = Kolom::all()->where('user_id',Auth::user()->id);
        return view('column/task',['kolom'=>$kolom]);
    }
    public function status()
    {
        
    }
}
