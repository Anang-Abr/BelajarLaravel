@extends('template.main')

@section('content')
    <div class="d-flex flex-row mb-3 justify-content-around">
    @foreach($books as $book)
        <div class="card" style="width: 18rem;">
        <img src="img/{{ $book->picture }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $book->name }}</h5>
            <p class="card-text">Author: {{ $book->author }}</p>
            <a href="/Home/{{ $book->id }}" class="stretched-link"></a>
        </div>
        </div>
    @endforeach
    </div>
@endsection