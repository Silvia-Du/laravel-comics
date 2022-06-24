
<header>
    <div class="container">
      <div class="logo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="logo-img">
      </div>
      <div class="sd-nav">

        <ul>
            @foreach ($lists[6] as $listItem)

            <li class="{{ Route::currentRouteName() === $listItem['name'] ? 'active' : ''}}"><a class="{{ Route::currentRouteName() === $listItem['name'] ? 'active' : ''}}" href="{{ route($listItem['name']) }}">{{ $listItem['name'] }}</a></li>

            @endforeach

        </ul>
      </div>
    </div>
</header>

