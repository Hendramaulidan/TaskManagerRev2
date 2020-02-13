@extends('layouts.app')

@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="container"> 
  <h2 class="display-4  mb-3"> 
      Parent Task {{$item->status}}
  </h2> 
  <a href="/home" class="btn btn-outline-danger mb-3">Back To Parent Task</a>
  <div class="text-right mb-3"> 
      <button data-target="#exampleModal" data-toggle="modal" class="btn btn-outline-dark">New Task</button>
  </div>  
<div class="accordion" id="accordionExample">
  @foreach($item->tasks as $itemku)
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseOne{{$itemku->id}}" aria-expanded="true" aria-controls="collapseOne">
            {{$itemku->name_task}}
        </button>
      </h2>
    </div>

    <div id="collapseOne{{$itemku->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p> {{$itemku->kegiatan}}</p>
          <p> My Item was Created at {{$itemku->created_at}}</p>
          <p>  My Item was Updated at {{$itemku->updated_at}}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/home/newTask/{{$item->id}}"method="post"class="form-group"> 
              {{csrf_field()}}
            Name:
              <input type="text" name="nameTask"required="required"placeholder="insert task name"class="form-control mb-3">
              Activity:
              <textarea class="form-control mb-3" name="Activity"placeholder="insert text"></textarea>
              <input type="hidden"value="{{$item->id}}" name="id_col">
              <input type="submit"class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
