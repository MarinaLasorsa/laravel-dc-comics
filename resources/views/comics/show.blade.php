@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<div class="container py-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1>COMIC DETAILS</h1>
        </div>
        <div class="col-auto">
            <a href="{{route('comics.edit', $comic)}}" class="btn btn-success">Edit</a>
        </div>
        <div class="col-auto">
            <form action="{{route('comics.destroy', $comic)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
            </form>
        </div>
    </div>
</div>
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-6">
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
    </div>
</div>

@endsection