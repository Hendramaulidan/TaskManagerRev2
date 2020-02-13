<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Column;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function history()
    {
        $histori = DB::table('tasks')->where('user_id',Auth::user()->id)->get();
        return view('history',['history'=>$histori]);
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
        DB::table('columns')->insert([
            'status'=>$request->input('parentTask'),
            'email'=>$request->input('email'),
            'user_id' => Auth::user()->id
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
    
       
}