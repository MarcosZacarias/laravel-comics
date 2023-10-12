@extends('layouts.app')


@section('page-title', $title)

@section('main-content')
<div class="container py-2">
  <div class="row justify-content-center align-items-center g-2">
    @foreach ($comics as $comic)
    <div class="col-3">
      <div class="card mb-2">
        <div class="card-header">
          <img src="{{$comic["thumb"]}}" alt="" class="">
        </div>
        <div class="card-body">
          <h5>{{$comic["title" ]}}</h3>
        </div>
      </div>      
    </div>
    @endforeach
    
    
  </div>
</div>
@endsection