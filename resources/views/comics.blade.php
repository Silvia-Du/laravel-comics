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

        {{-- CARD --}}
        @foreach ( $comics as $comic )
        <div class="card">

            <div class="img-box">
                <img src="{{ $comic->image }}" alt="cardItem.type">
            </div>

            <p>{{ $comic->title }}</p>
        </div>
        @endforeach

      </div>

      <div class="btn-cta"><p>Load More</p></div>

    </div>
    {{-- SHOP ROW --}}
    <div class="shop-row">
        <div class="container">

          <div
            {{-- v-for di ctaShopItems --}}>
            <a :href=""><img src="" alt=""></a>
            <p></p>
          </div>

        </div>
      </div>


  </main>


@endsection
