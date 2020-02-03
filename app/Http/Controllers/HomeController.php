<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $username = Auth::user()->name;
        $task = DB::table('task')->where('name_user',$username)->where('status','mulai')->get();
        $task2 = DB::table('task')->where('name_user',$username)->where('status','In Progress')->get();
        $task3 = DB::table('task')->where('name_user',$username)->where('status','Finish')->get();
       return view('home',['task2' => $task2, 'task' => $task,'task3'=> $task3]);
    }
    public function newTask()
    {
        return view('newTask');
    }
    public function actionNewTask(Request $request)
    {
        DB::table('task')->insert([
            'name_task' => $request->namaTask,
            'kegiatan' => $request->kegiatan,
            'status'    => $request->status,
            'name_user' => Auth::user()->name,
        ]);
        DB::table('history')->insert([
            'name_task' => $request->namaTask,
            'kegiatan' => $request->kegiatan,
            'id' => Auth::user()->id,
        ]);
        return redirect('/home');
    }
    public function inProgress( Request $request , $id)
    {
        $progress = DB::table('task')->where('id_task',$id)->update([
            'waktu' => Carbon::now(),
            'status'    => $request->status,
            
        ]);
        return redirect('/home');
    }
    
    public function finish( Request $request , $it)
    {
        $progress = DB::table('task')->where('id_task',$it)->update([
            'waktu' => Carbon::now(),
            'status'    => $request->status,
            
        ]);
        return redirect('/home');
    }public function delete($is)
    {
        DB::table('task')->where('id_task',$is)->delete();
        return redirect('/home');
    }
    
}