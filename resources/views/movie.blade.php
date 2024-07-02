@extends('layouts.app')

@section('content')
    <h1>Movies List</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h2>{{ $movie->title }}</h2>
                <p>{{ $movie->original_title }}</p>
                <p><strong>Release Date:</strong> {{ $movie->date }}</p>
                <p><strong>Vote:</strong> {{ $movie->vote }}</p>
            </li>
        @endforeach
    </ul>
@endsection
