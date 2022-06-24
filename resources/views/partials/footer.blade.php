<footer class="debug">

    <!-- top -->
    <div class="top">

      <div class="container">

        <div class="list-container">
          <div class="list">
            <p>Dc Comics</p>
            <ul>
                @foreach ($lists[1] as $listItem)
                <li><a href="{{ $listItem['href'] }}">{{ $listItem['name'] }}</a></li>
                @endforeach

            </ul>
            <p>Shop</p>
            <ul>
              @foreach ($lists[2] as $listItem)
              <li><a href="{{ $listItem['href'] }}">{{ $listItem['name'] }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="list">
            <p>Dc</p>
            {{-- cui vfor dcList --}}
            <ul>
                @foreach ($lists[3] as $listItem)
                <li><a href="{{ $listItem['href'] }}">{{ $listItem['name'] }}</a></li>
                @endforeach
            </ul>
          </div>
          <div class="list">
            <p>Sites</p>
            {{-- qui c'è un for di sitesList --}}
            <ul>
                @foreach ($lists[4] as $listItem)
                <li><a href="{{ $listItem['href'] }}">{{ $listItem['name'] }}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
        <img src="{{ asset('img/dc-logo-bg.png') }}" alt="logo-bg">

      </div>
    </div>
    <!-- bottom -->
    <div class="bottom">
      <div class="container cta">
        <div class="button">
          <p>sign-up-now!</p>
        </div>
        <div class="cta-social">
          <p>Follow us</p>

          @foreach ($lists[0] as $listItem)
          <a href="#"><img src="{{ asset($listItem['image']) }}" alt="faceboog-logo"></a>
          @endforeach

        </div>
      </div>
    </div>



  </footer>
