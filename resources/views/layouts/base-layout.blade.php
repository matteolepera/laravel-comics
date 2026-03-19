@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("win-title")</title>
</head>

<body>
    @include("partials.header")
    <main>
        @yield("main")


        <!-- PREFOOTER -->
        <section class="dc-prefooter">
            <div class="dc-prefooter__inner">

                <a href="#" class="dc-prefooter__item">
                    <div class="dc-prefooter__icon-wrap">
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                    </div>
                    <span class="dc-prefooter__label">Digital Comics</span>
                </a>

                <div class="dc-prefooter__divider"></div>

                <a href="#" class="dc-prefooter__item">
                    <div class="dc-prefooter__icon-wrap">
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="DC Merchandise">
                    </div>
                    <span class="dc-prefooter__label">DC Merchandise</span>
                </a>

                <div class="dc-prefooter__divider"></div>

                <a href="#" class="dc-prefooter__item">
                    <div class="dc-prefooter__icon-wrap">
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="Subscription">
                    </div>
                    <span class="dc-prefooter__label">Subscription</span>
                </a>

                <div class="dc-prefooter__divider"></div>

                <a href="#" class="dc-prefooter__item">
                    <div class="dc-prefooter__icon-wrap">
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator">
                    </div>
                    <span class="dc-prefooter__label">Comic Shop Locator</span>
                </a>

                <div class="dc-prefooter__divider"></div>

                <a href="#" class="dc-prefooter__item dc-prefooter__item--visa">
                    <div class="dc-prefooter__icon-wrap dc-prefooter__icon-wrap--visa">
                        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="DC Power Visa">
                    </div>
                    <span class="dc-prefooter__label">DC Power Visa</span>
                </a>

            </div>
        </section>
        <!-- PREFOOTER -->

    </main>

    @include("partials.footer")

</body>

</html>