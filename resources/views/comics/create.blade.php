@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-auto">
            <h1>ADD A COMIC</h1>
        </div>
    </div>
</div>
<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="titolo">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Title</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" placeholder="serie">
        </div>
    </form>
</div>
@endsection