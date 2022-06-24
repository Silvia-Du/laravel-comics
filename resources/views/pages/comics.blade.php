@section('title', 'Home')

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

            {{-- v-for di ctaShopItems --}}
            <div class="item">
              <a href="#"><img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital-comics"></a>
              <p>digital comics</p>
            </div>

            <div class="item">
              <a href="#"><img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="merchandise"></a>
              <p>dc merchandise</p>
            </div>

            <div class="item">
              <a href="#"><img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="suscription"></a>
              <p>digital comics</p>
            </div>

            <div class="item">
              <a href="#"><img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="comic-shop-locator"></a>
              <p>comic shop locator</p>
            </div>

            <div class="item">
              <a href="#"><img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="power-visa"></a>
              <p>dc power visa</p>
            </div>

        </div>
      </div>


  </main>


@endsection
