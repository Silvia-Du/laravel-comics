
<header>
    <div class="container">
      <div class="logo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="logo-img">
      </div>
      <div class="sd-nav">

        <ul>
          <li><a class="{{ Route::currentRouteName() === 'characters'? 'active': '' }}" href="">characters</a></li>
          {{-- <li><a class="{{ Route::currentRouteName() === 'comics'? 'active': '' }}" href="">comics</a></li>
          <li><a class="{{ Route::currentRouteName() === 'movies'? 'active': '' }}" href="">movies</a></li>
          <li><a class="{{ Route::currentRouteName() === 'tv'? 'active': '' }}" href="">tv</a></li>
          <li><a class="{{ Route::currentRouteName() === 'games'? 'active': '' }}" href="">games</a></li>
          <li><a class="{{ Route::currentRouteName() === 'collectibles'? 'active': '' }}" href="">collectibles</a></li>
          <li><a class="{{ Route::currentRouteName() === 'videos'? 'active': '' }}" href="">videos</a></li>
          <li><a class="{{ Route::currentRouteName() === 'fans'? 'active': '' }}" href="">fans</a></li>
          <li><a class="{{ Route::currentRouteName() === 'news'? 'active': '' }}" href="">news</a></li>
          <li><a class="{{ Route::currentRouteName() === 'shop'? 'active': '' }}" href="">shop</a></li> --}}
        </ul>
      </div>
    </div>
</header>

