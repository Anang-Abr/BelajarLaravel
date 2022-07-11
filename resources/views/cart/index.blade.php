@extends('template.main')

@section('content')
<div class="row my-3 justify-content-start">
    @if($items->count())
    @foreach($items as $item)
    <div class="col-3">
        {{-- <p>{{ $item }}</p> --}}
        <div class="card mb-4 " style="height: 36rem;">
            <img src="img/{{ $item->bookinfo->picture ?? "default.jpg" }}" class="card-img-top"   alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title">{{ $item->bookinfo->title }}</h5>
                <small class="text-danger fw-semibold">Rp. {{ number_format($item->bookinfo->price) }}</small> 
                <p class="card-text">Author: {{ $item->bookinfo->author }}</p>
                <small>5/5 | terjual 10</small>
                <small>value: {{ $item->value }}</small>
                <div class="d-flex justify-content-between mt-2">
                    <a href="/cart/{{ $item->id }}" class="btn btn-primary">Edit</a>
                    <form action="/cart/{{ $item->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">
                            hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class='text-center'>
    <h1 class="text-black-50">
        Your Cart is Empty!
    </h1>
    <a href="/home" class="btn btn-success">Home Page</a>
    </div>
    @endif
    </div>
@endsection