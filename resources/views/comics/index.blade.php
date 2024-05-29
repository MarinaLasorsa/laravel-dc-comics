@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-auto">
            <h1>COMICS</h1>
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
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic )
            <tr>
                <td>
                    <img src="{{$comic->thumb}}" alt="">
                </td>
                <td>
                    <a href="{{route('comics.show', $comic)}}">
                        {{$comic->title}}
                    </a>
                </td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->sale_date}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
    </div>

@endsection