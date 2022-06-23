@extends('comics')

@section('cardItem')

<div class="card">
    <div class="img-box">
      <img src="{{ $comic->image }}" alt="cardItem.type">
    </div>

    <p>{{ $comic->title }}</p>
  </div>

@endsection
