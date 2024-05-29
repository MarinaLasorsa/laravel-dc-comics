@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-auto">
            <h1>COMIC DETAILS</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text">{{$comic->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Series: {{$comic->series}}</li>
          <li class="list-group-item">Price: {{$comic->price}}</li>
          <li class="list-group-item">Sale date: {{$comic->sale_date}}</li>
        </ul>
    </div>
</div>

@endsection