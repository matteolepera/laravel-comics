<header>

    <!-- LOGO -->
    <div class="logo">
        <a href={{ route("home") }}> <img src="{{ asset('img/dc-logo.png') }}" alt="DC Comics" /> </a>
    </div>

    <!-- NAV -->
    <nav>
        <ul>

            <li>
                <a href={{ route("characters") }}>Characters</a>
            </li>

            <li>
                <span class="nav-btn">
                    Comics <span class="caret"></span>
                </span>
                <ul class="dropdown">
                    <li><a href="#">Latest Issues</a></li>
                    <li><a href="#">Collections</a></li>
                    <li><a href="#">Graphic Novels</a></li>
                    <li><a href="#">Digital Comics</a></li>
                </ul>
            </li>

            <li>
                <span class="nav-btn">
                    Movies &amp; TV <span class="caret"></span>
                </span>
                <ul class="dropdown">
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV Shows</a></li>
                    <li><a href="#">Streaming</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Games</a>
            </li>

            <li>
                <a href="#">News</a>
            </li>

            <li>
                <a href="#">Video</a>
            </li>

            <li>
                <span class="nav-btn">
                    Shop <span class="caret"></span>
                </span>
                <ul class="dropdown">
                    <li><a href="#">Apparel</a></li>
                    <li><a href="#">Collectibles</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Community</a>
            </li>

            <li>
                <span class="nav-btn">
                    More <span class="caret"></span>
                </span>
                <ul class="dropdown">
                    <li><a href="#">About DC</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </li>

        </ul>
    </nav>

    <!-- RIGHT CONTROLS -->
    <div class="header-right">

        <!-- Search icon -->
        <button class="icon-btn" aria-label="Search">
            <svg viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="7" />
                <line x1="16.5" y1="16.5" x2="22" y2="22" />
            </svg>
        </button>

        <div class="auth-divider"></div>
        <a href="#" class="auth-btn">Sign Up</a>
        <div class="auth-divider"></div>
        <a href="#" class="auth-btn">Log In</a>

    </div>

</header>