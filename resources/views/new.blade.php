@foreach($new as $news)
{{$news->status}}

@foreach($new->tasks as $ta)
{{$ta->kegiatan}}
@endforeach

@endforeach