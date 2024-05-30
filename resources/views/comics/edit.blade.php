@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<div class="container py-3">
    <div class="row">
        <div class="col-auto">
            <h1>EDIT COMIC: {{$comic->title}}</h1>
        </div>
    </div>
</div>
<div class="container py-3">
    <form action="{{route('comics.update', $comic)}}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image" name="thumb" placeholder="http://..." value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Comic book" value="{{$comic->type}}">
        </div>

        <button class="btn btn-primary">Conferma modifiche</button>
    </form>
</div>
@endsection