<footer class="debug">

    <!-- top -->
    <div class="top">

      <div class="container">

        <div class="list-container">
          <div class="list">
            <p>Dc Comics</p>
            <ul
            >
              <li><a href="#">Characters</a></li>
              <li><a href="#">comics</a></li>
              <li><a href="#">movies</a></li>
              <li><a href="#">TV</a></li>
              <li><a href="#">games</a></li>
              <li><a href="#">videos</a></li>
              <li><a href="#">news</a></li>

            </ul>
            <p>Shop</p>
            {{-- qui va il vfor di shopList --}}
            <ul>
              <li><a href="#">shop DC</a></li>
              <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
          </div>
          <div class="list">
            <p>Dc</p>
            {{-- cui vfor dcList --}}
            <ul>
              <li><a href="#">therms Of Use</a></li>
              <li><a href="#">Privacy policy (New)</a></li>
              <li><a href="#">ad choice</a></li>
              <li><a href="#">advertising</a></li>
              <li><a href="#">jobs</a></li>
              <li><a href="#">Subscriptions</a></li>
              <li><a href="#">talent Workshop</a></li>
              <li><a href="#">CPSC Certficates</a></li>
              <li><a href="#">ratings</a></li>
              <li><a href="#">shop Help</a></li>
              <li><a href="#">contact Us</a></li>
            </ul>
          </div>
          <div class="list">
            <p>Sites</p>
            {{-- qui c'è un for di sitesList --}}
            <ul>
              <li><a href="#" >DC</a></li>
              <li><a href="#" >MAD Magazine</a></li>
              <li><a href="#" >DC Kids</a></li>
              <li><a href="#" >DC Universe</a></li>
              <li><a href="#" >DC Power Visa</a></li>
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

            {{-- qui va il foreach di socialIcons --}}
          <a href="#"><img src="{{ asset('img/footer-facebook.png') }}" alt="faceboog-logo"></a>
          <a href="#"><img src="{{ asset('img/footer-twitter.png') }}" alt="twitter-logo"></a>
          <a href="#"><img src="{{ asset('img/footer-youtube.png') }}" alt="twitter-logo"></a>
          <a href="#"><img src="{{ asset('img/footer-pinterest.png') }}" alt="twitter-logo"></a>
          <a href="#"><img src="{{ asset('img/footer-periscope.png') }}" alt="twitter-logo"></a>
        </div>
      </div>
    </div>



  </footer>
