@extends('template.main')

@section('content')
    <div class="row my-3 justify-content-start">
    @foreach($books as $book)
    <div class="col-3">
        <div class="card mb-4 " style="height: 34rem;">
            <img src="img/{{ $book->picture ?? "default.jpg" }}" class="card-img-top"   alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title">{{ $book->title }}</h5>
                <small class="text-danger fw-semibold">Rp. {{ number_format($book->price) }}</small> 
                <p class="card-text">Author: {{ $book->author }}</p>
                <a href="/home/{{ $book->id }}" class="stretched-link"></a>
                <small>5/5 | terjual 10</small>
            </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection