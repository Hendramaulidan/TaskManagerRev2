@extends('layouts.app')
@section('content')


<div class="accordion" id="accordionExample">

    @foreach($kolom as $kol)
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$kol->id}}" aria-expanded="true" aria-controls="collapseOne{{$kol->id}}">
          {{$kol->status}}
        </button>
      </h2>
    </div>
    <div id="collapseOne{{$kol->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      @foreach ($kol->status as $stats)
        {{$stats->status}}
      @endforeach
      </div>
    </div>
  </div>
@endforeach

</div>

@endsection