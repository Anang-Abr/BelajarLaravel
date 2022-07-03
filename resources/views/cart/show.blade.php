@extends('template.main')

@section('content')
<div class="row my-3 justify-content-start">
    @foreach($items as $item)
    <div class="col-3">
        {{-- <p>{{ $item }}</p> --}}
        <div class="card mb-4 " style="height: 34rem;">
            <img src="img/{{ $item->bookinfo->picture ?? "default.jpg" }}" class="card-img-top"   alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title">{{ $item->bookinfo->title }}</h5>
                <small class="text-danger fw-semibold">Rp. {{ number_format($item->bookinfo->price) }}</small> 
                <p class="card-text">Author: {{ $item->bookinfo->author }}</p>
                <a href="/home/{{ $item->bookinfo->id }}" class="stretched-link"></a>
                <small>5/5 | terjual 10</small>
            </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection