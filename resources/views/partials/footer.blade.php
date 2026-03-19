<style>
  .dc-footer__bg {
    position: absolute;
    inset: 0;
    z-index: 0;
    background:
      linear-gradient(to right,
        rgba(10, 10, 15, 0.80) 0%,
        rgba(10, 10, 15, 0.75) 45%,
        rgba(10, 10, 15, 0.35) 72%,
        rgba(10, 10, 15, 0.05) 100%),
      url('{{ asset('img/dc-logo-bg.png') }}') right center / 340px no-repeat,
      linear-gradient(rgba(10, 10, 15, 0.55), rgba(10, 10, 15, 0.55)),
      url('{{ asset('img/footer-bg.jpg') }}') center top / cover no-repeat;
  }
</style>


<footer class="dc-footer">
  <div class="dc-footer__bg"></div>


  <!-- Colonne link -->
  <div class="dc-footer__content">

    <!-- Colonna 1: DC COMICS + SHOP -->
    <div class="dc-footer__col">
      <div class="dc-footer__col-title">DC Comics</div>
      <ul>
        <li><a href={{ route("characters") }}>Characters</a></li>
        <li><a href="#">Comics</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">TV</a></li>
        <li><a href="#">Games</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">News</a></li>
      </ul>
      <div class="dc-footer__col-title mt">Shop</div>
      <ul>
        <li><a href="#">Shop DC</a></li>
        <li><a href="#">Shop DC Collectibles</a></li>
      </ul>
    </div>

    <!-- Colonna 2: DC -->
    <div class="dc-footer__col">
      <div class="dc-footer__col-title">DC</div>
      <ul>
        <li><a href="#">Terms Of Use</a></li>
        <li><a href="#">Privacy Policy (New)</a></li>
        <li><a href="#">Ad Choices</a></li>
        <li><a href="#">Advertising</a></li>
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Subscriptions</a></li>
        <li><a href="#">Talent Workshops</a></li>
        <li><a href="#">CPSC Certificates</a></li>
        <li><a href="#">Ratings</a></li>
        <li><a href="#">Shop Help</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>

    <!-- Colonna 3: SITES -->
    <div class="dc-footer__col">
      <div class="dc-footer__col-title">Sites</div>
      <ul>
        <li><a href="#">DC</a></li>
        <li><a href="#">MAD Magazine</a></li>
        <li><a href="#">DC Kids</a></li>
        <li><a href="#">DC Universe</a></li>
        <li><a href="#">DC Power Visa</a></li>
      </ul>
    </div>

  </div>

  <!-- Barra inferiore -->
  <div class="dc-footer__bar">
    <div class="dc-footer__bar-inner">
      <a href="#" class="dc-footer__signup">Sign-Up Now!</a>

      <div class="dc-footer__social">
        <span class="dc-footer__social-label">Follow Us</span>

        <!-- Facebook -->
        <a href="#" class="dc-footer__social-icon" title="Facebook">
          <img src="{{ asset('img/footer-facebook.png') }}" alt="Logo Facebook">
        </a>

        <!-- Twitter -->
        <a href="#" class="dc-footer__social-icon" title="Twitter">
          <img src="{{ asset('img/footer-twitter.png') }}" alt="Logo Twitter">
        </a>

        <!-- YouTube -->
        <a href="#" class="dc-footer__social-icon" title="YouTube">
          <img src="{{ asset('img/footer-youtube.png') }}" alt="Logo YouTube">
        </a>

        <!-- Pinterest -->
        <a href="#" class="dc-footer__social-icon" title="Pinterest">
          <img src="{{ asset('img/footer-pinterest.png') }}" alt="Logo Pinterest">
        </a>

        <!-- Location/Map -->
        <a href="#" class="dc-footer__social-icon" title="Locate Us">
          <img src="{{ asset('img/footer-periscope.png') }}" alt="Logo Periscope">
        </a>
      </div>
    </div>
  </div>

</footer>