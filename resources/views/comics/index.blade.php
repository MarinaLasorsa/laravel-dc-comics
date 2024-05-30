@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<div class="container">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1>COMICS</h1>
        </div>
        <div class="col-auto">
            <a href="{{route('comics.create')}}" class="btn btn-primary">Add Comic</a>
        </div>
    </div>
</div>
<div class="container">
    <table class="table">
      <thead>
        <tr>
            <th scope="col">Cover</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Price</th>
            <th scope="col">Sale Date</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic )
            <tr>
                <td>
                    <img src="{{$comic->thumb}}" height="122" width="122" alt="">
                </td>
                <td>
                    <a href="{{route('comics.show', $comic)}}">
                        {{$comic->title}}
                    </a>
                </td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->sale_date}}</td>
                <td><a href="{{route('comics.edit', $comic)}}" class="btn btn-link link-success">Edit</a></td>
                <td>
                    <form action="{{route('comics.destroy', $comic)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link link-danger">Delete</button>
                    </form> 
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    </div>

@endsection