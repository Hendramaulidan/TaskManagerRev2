@extends('layouts.app')

@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="container"> 
		<h1 class="display-3">See Your Parent Task Here </h1>
		<table class="table"> 
			<tr>
				<th>	
					Id Task
				</th>
				<th> 
					Status
				</th>
				<th> 
					your email
				</th>
				<th> 
					created at
				</th>
				<th>
					<a href="" data-toggle="modal" data-target="#exampleModal">New Parent Task</a>
				</th>
			</tr>
    @foreach($use as $item)
    		<tr> 
    				<td> 
    						{{$item->id}}
    				</td>
    				<td> 
    						{{$item->status}}
    				</td>
    				<td> 
    						{{$item->email}}
    				</td>
    				<td> 
    						{{$item->created_at}}
    				</td>
    				<td> 
    					<a href="home/{{$item->id}}">Check It Out</a>	
    				</td>
    		</tr>

      
          
          

    @endforeach

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Parent Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/home/newParent"method="post"class="form-group"> 
        			{{csrf_field()}}
        		Insert Here : 
        			<input type="text" name="parentTask"required="required"placeholder="insert parent task name"class="form-control mb-3">
        			<input type="email" name="email"required="required"placeholder="insert Email Here"class="form-control mb-3">
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
<!-- Modal -->
