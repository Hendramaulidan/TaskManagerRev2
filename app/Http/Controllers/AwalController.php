<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\TaskModel;
class AwalController extends Controller
{
    public function index()
    {
        return view('welcome');
        
    }
    public function process()
    {
    	$start = TaskModel::where('user_id',Auth::user()->id)->where('name_task','Start')->get();
    	$Process = TaskModel::where('user_id',Auth::user()->id)->where('name_task','Process')->get();
    	$Finish = TaskModel::where('user_id',Auth::user()->id)->where('name_task','Finish')->get();

    	return view('new',compact('start','Process','Finish'));
    }
    public function actStart(Request $request)
    {
    	TaskModel::insert([
    		'kegiatan' => $request->input('activity'),
    		'name_task'=> 'Start',
    		'user_id' => Auth::user()->id
    	]);
    	return redirect('home/process');
    }
    public function actProcess(Request $request)
    {
    	TaskModel::insert([
    		'kegiatan' => $request->input('activity'),
    		'name_task'=> 'Process',
    		'user_id' => Auth::user()->id
    	]);
    	return redirect('home/process');
    }
    public function actFinish(Request $request)
    {
    	TaskModel::insert([
    		'kegiatan' => $request->input('activity'),
    		'name_task'=> 'Finish',
    		'user_id' => Auth::user()->id
    	]);
    	return redirect('home/process');
    }

    public function toProcess(Request $request,$id)
    {
    	$process = TaskModel::find($id);
    	$process->update([
    		'name_task'=>'Process'
    	]);
    	return redirect('home/process');
    }
    public function toFinish(Request $request,$id)
    {
    	$Finish = TaskModel::find($id);
    	$Finish->update([
    		'name_task'=>'Finish'
    	]);
    	return redirect('home/process');
    }
    public function delete($id)
    {
    	$taskDel =  TaskModel::find($id);
		$taskDel->delete();
    	return redirect('home/process');
    }

}



