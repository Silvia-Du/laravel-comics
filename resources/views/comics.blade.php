@extends('layouts.main')

@section('content')

<main>
    <!-- jumbotron -->
    <div class="jumbotron"></div>

    <!-- CurrentSeries Row -->
    <div class="current-series">

      <div class="container">

        <div class="flag">
          <p>Current Series</p>
        </div>
        @foreach ( $comics as $comic )
        <div class="card">
            <div class="img-box">
              <img src="{{ $comic->image }}" alt="cardItem.type">
            </div>

            <p>{{ $comic->title }}</p>
          </div>

        {{-- @yield('cardItem') --}}
        @endforeach

      </div>

      <div class="btn-cta"><p>Load More</p></div>

    </div>
    <!-- Shop Row -->
    {{-- <ShopRow /> --}}

  </main>


@endsection
