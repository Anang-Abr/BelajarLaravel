@extends('template.main')

@section('content')
<div class="row my-3">
<div class="col-5">
    <img src="../img/{{ $item->bookinfo->picture ?? "default.jpg" }}" class="rounded shadow border border-white" style="width:300px" alt=>
    <form action="{{ url('cart/'.$item->id ) }}" method="post" class="row row-cols-lg-auto g-3 align-items-center my-3" >
        @method('put')
        @csrf
        <div class="col-12">
            <label class="visually-hidden" for="value">Username</label>
            <div class="input-group">
            <input type="number" name='value' class="form-control" id="value" placeholder="Value" min="1" value="{{ old('value', $item->value) }}">
            </div>
        </div>
        <input type="hidden" value="{{ $item->bookinfo->price }}" name="price">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update Value</button>
        </div>
    </form>
    <div>
        <strong class="text-primary">
            Total : Rp. {{ number_format($item->total_price) }}
        </strong>
    </div>
</div>
<div class="col-7">
    <h1>{{ $item->bookinfo->title }}</h1>
    <h4 class="text-danger fw-semibold">Rp. {{ number_format($item->bookinfo->price) }}</h4> 
    <h5>Author: {{ $item->bookinfo->author }}</h5>
    <p class="mt-3">{{ $item->bookinfo->description }}</p>
</div>
</div>
@endsection