@extends("layouts.base-layout")
@section("win-title")
    DC Comics©
@endsection

@section("main")
    <style>
        .dc-hero__bg {
            background:
                url('{{ asset('img/jumbotron.jpg') }}') center top / cover no-repeat;
        }
    </style>
    <section class="dc-hero">
        <div class="dc-hero__bg"></div>
        <div class="dc-hero__overlay"></div>

        <div class="dc-hero__content">
            <span class="dc-hero__eyebrow">DC Universe</span>
            <h1 class="dc-hero__title">
                The World's<br>Greatest<br>Super Heroes
            </h1>
            <p class="dc-hero__subtitle">
                Explore the iconic stories, characters and worlds<br>that have defined comics for over 80 years.
            </p>
            <div class="dc-hero__actions">
                <a href="#" class="dc-hero__cta dc-hero__cta--primary">Explore Now</a>
                <a href="#" class="dc-hero__cta dc-hero__cta--secondary">Latest Issues</a>
            </div>
        </div>

        <div class="dc-hero__scroll-hint">
            <span></span>
        </div>
    </section>
@endsection