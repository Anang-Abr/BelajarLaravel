@extends('template.main')

@section('content')
<div class="row my-3">
<div class="col-5">
    <img src="../img/{{ $book->picture ?? "default.jpg" }}" class="rounded shadow border border-white" style="width:300px" alt=>
    <form action="{{ url('cart') }}" method="post" class="row row-cols-lg-auto g-3 align-items-center pt-5" >
        @csrf
        <div class="col-12">
            <label class="visually-hidden" for="value">Username</label>
            <div class="input-group">
            <input type="number" name='value' class="form-control" id="value" placeholder="Value" value='1'  min="1" >
            </div>
        </div>
        <input type="hidden" value="{{ $book->id }}" name="book_id">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add To Cart</button>
        </div>
    </form>
</div>
<div class="col-7">
    <h1>{{ $book->title }}</h1>
    <h4 class="text-danger fw-semibold">Rp. {{ number_format($book->price) }}</h4> 
    <h5>Author: {{ $book->author }}</h5>
    <p class="mt-3">{{ $book->description }}</p>
</div>
</div>
@endsection