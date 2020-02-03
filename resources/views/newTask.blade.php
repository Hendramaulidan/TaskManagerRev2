@extends('layouts.app')


@if (session('status'))
{{ session('status') }}                        
@endif
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card border-dark md-3">
        <div class="card-header">New Task</div>
        <div class="card-body">
        <form action="/home/actiontambah" class="form-group">
        @csrf
        nama task : <input type="text"name="namaTask"class="form-control">
        
        <p> kegiatan : <textarea name="kegiatan"cols="30" rows="5"class="form-control"></textarea></p>
        
        <input type="hidden" name="status"value="mulai">
            <p><input type="submit" value="submit"class="btn btn-outline-dark"></p>
            
             </form>
   

        </div>
        </div>
    
        </div>
    </div>

</div>
@endsection