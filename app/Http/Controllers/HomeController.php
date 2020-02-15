<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Column;
use App\TaskModel;
use App\Status;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function history()
    {
        $histori = TaskModel::where('user_id',Auth::user()->id)->get();
        return view('history',['history'=>$histori]);
    }
    public function hisDel($id)
    {
        $column = DB::table('tasks')->where('id',$id);
        $column->delete();
        return redirect('/home/history');
    }
        
    public function index()
    {
        $use = DB::table('columns')->get()->where('user_id',Auth::user()->id);
        return view('first',compact('use'));
        
    }
        function status($id)
    {
        $item = Column::find($id);
        return  view('home',compact('item'));
    }
    public function newParent(Request $request)
    {
        Status::insert([
            'status'=>$request->input('parentTask'),
            'email'=>$request->input('email'),
            'user_id' => Auth::user()->id
        ]);
        return redirect('home');
    }
    public function editParent(Request $request,$id)
    {
        $status = Status::find($id);
        $status->update([
            'status'=> $request->input('status'),
            'email'=> $request->input('email'),
        ]);
        return redirect('home');
    }
    public function newTask(Request $request,$id)
    {
        DB::table('tasks')->insert([
            'name_task'=>$request->input('nameTask'),
            'kegiatan'=>$request->input('Activity'),
            'column_id'=>$request->input('id_col'),
            'user_id' => Auth::user()->id
        ]);
        return redirect('home/'.$id);
    }
    public function parDel($id)
    {
        $column = Status::find($id);
        $column->delete();
        return redirect('/home');
    }
}