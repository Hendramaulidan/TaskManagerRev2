@extends('layouts.app')

@section('content')
@if (session('status'))
{{ session('status') }}                        
@endif
<div class="container shadow">
<a href="home/newtask"><input type="submit" value="New Task +" class="btn btn-outline-dark shadow "></a>
    <div class="row"style="padding : 2em;">
        <div class="col-md-4">
    <h3><div class="text-center text-dark  shadow-sm">My New Task</div></h3>
    
        @foreach($task as $use)
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header text-dark"> Task Ku</div>
            <div class="card-body text-dark">
                <h5 class="card-title">{{$use->name_task}}</h5>
                <p class="card-text">{{$use->kegiatan}}.</p>
                <p>{{$use->waktu}}</p>
                <p class="card alert alert-dark">{{$use->name_user}}</p>
                <form action="/home/edit/{{$use->id_task}}">
                    <input type="hidden"readonly name="status"value="In Progress">
                    <input type="submit" value="{{$use->status}}"class="btn btn-outline-dark">
                </form>
                <br><a href="/home/delete/{{$use->id_task}}"><input type="submit" value="Delete"class="btn btn-outline-danger"></a></br>
              </div>
            </div>
        @endforeach

        </div>
        <div class="col-md-4">
        <h3><div class="text-center text-primary shadow-sm">In Progress task</div></h3>
        @foreach($task2 as $use)
        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header text-primary"> {{$use->status}}</div>
            <div class="card-body text-primary">
                <h5 class="card-title">{{$use->name_task}}</h5>
                <p class="card-text">{{$use->kegiatan}}.</p>
                <p>{{$use->waktu}}</p>
                <p class="card alert alert-primary">{{$use->name_user}}</p>
                <form action="/home/finish/{{$use->id_task}}">
                    <input type="hidden"readonly name="status"value="Finish">
                <input type="submit" value="Selesai"class="btn btn-outline-primary">
                </form>
                <br><a href="/home/delete/{{$use->id_task}}"><input type="submit" value="Delete"class="btn btn-outline-danger"></a></br>
              </div>
            </div>
            
        @endforeach
        </div>
        <div class="col-md-4">
        <h3><div class="text-center text-success shadow-sm">Finish</div></h3>
        @foreach($task3 as $use)
        <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header text-success"> {{$use->status}}</div>
            <div class="card-body text-success">
                <h5 class="card-title">{{$use->name_task}}</h5>
                <p class="card-text">{{$use->kegiatan}}.</p>
                <p>{{$use->waktu}}</p>
                <p class="card alert alert-success">{{$use->name_user}}</p>
                <br><a href="/home/delete/{{$use->id_task}}"><input type="submit" value="Delete"class="btn btn-outline-danger"></a></br>
                
              </div>
            </div>
        @endforeach
        
        
        </div>


    </div>
</div>
@endsection
