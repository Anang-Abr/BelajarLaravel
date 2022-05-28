@extends('template.main')

@section('content')
<div class="d-flex flex-row mb-3">
<img src="../img/{{ $book->picture }}" class="rounded shadow border border-white" style="width:300px" alt=>
<div class="ps-5">
    <h1>{{ $book->name }}</h1>
    <h5>Author: {{ $book->author }}</h5>
</div>
</div>
@endsection