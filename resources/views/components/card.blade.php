<div class="dc-card">
    <div class="dc-card__inner">

        <!-- FRONTE -->
        <div class="dc-card__front">
            <div class="dc-card__img-wrap">
                <img src={{ $thumb }} alt="Batman" class="dc-card__img">
                <span class="dc-card__type-badge">{{ $type }}</span>
            </div>
            <div class="dc-card__front-body">
                <span class="dc-card__series"> {{ $series }}</span>
                <h3 class="dc-card__title">{{ $title }}</h3>
                <span class="dc-card__price">{{ $price }}</span>
            </div>
        </div>

        <!-- RETRO -->
        <div class="dc-card__back">

            <div class="dc-card__back-header">
                <h3 class="dc-card__back-title">{{ $title }}</h3>
                <span class="dc-card__back-series">{{ $series }}</span>
            </div>

            <div class="dc-card__back-scroll">

                <p class="dc-card__description">
                    {{ $description }}
                </p>

                <div class="dc-card__meta-block">
                    <span class="dc-card__meta-label">On Sale</span>
                    <span class="dc-card__meta-value">{{ $sale_date }}</span>
                </div>

                <div class="dc-card__meta-block">
                    <span class="dc-card__meta-label">Type</span>
                    <span class="dc-card__meta-value">{{ $type }}</span>
                </div>

                <div class="dc-card__meta-block">
                    <span class="dc-card__meta-label">Writers</span>
                    <ul class="dc-card__people-list">
                        {{ $writers }}
                    </ul>
                </div>

                <div class="dc-card__meta-block">
                    <span class="dc-card__meta-label">Artists</span>
                    <ul class="dc-card__people-list">
                        {{ $artists }}
                    </ul>
                </div>

            </div>

            <div class="dc-card__back-fade"></div>

            <a href="#" class="dc-card__back-cta">View Issue</a>

        </div>

    </div>
</div>