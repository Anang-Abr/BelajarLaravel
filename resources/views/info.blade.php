@extends('template.main')

@section('content')
<div class="d-flex flex-row my-3">
<img src="../img/{{ $book->picture ?? "default.jpg" }}" class="rounded shadow border border-white" style="width:300px" alt=>
<form action="{{ url('cart') }}" method="post">
    @csrf
    <input type="hidden" value="{{ $book->id }}" name="book_id">
    <button type="submit" class="btn btn-primary">Add To Cart</button>
</form>
<div class="ps-5">
    <h1>{{ $book->id }}. {{ $book->title }}</h1>
    <h4 class="text-danger fw-semibold">Rp. {{ number_format($book->price) }}</h4> 
    <h5>Author: {{ $book->author }}</h5>
    <p class="mt-3">{{ $book->description }}</p>
</div>
</div>
@endsection