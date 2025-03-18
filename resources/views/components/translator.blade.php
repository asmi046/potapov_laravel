        <div class="container">
            <h2 class="section-title comments"><a href="{{ config('lend_data.header.y_lnk') }}">ОТЗЫВЫ <i class="section-title--icons"></i></a></h2>

            <div class="service-start__preview">
                <img src="{{ asset('icons/main-star-icon.svg') }}" alt="Иконка здвезды рейтинга">
                <p>5.0 <span>45 отзывов</span></p>
            </div>

            <div class="service-card">

                @foreach (config('lend_data.rev') as $item)
                    <x-cards.rew :item="$item"></x-cards.rew>
                @endforeach

            </div>
        </div>
