<div class="service-card__item">
    <div class="service-card__item-human">
        <img src="{{ asset('/images/rew/'.$item['img']) }}" alt="Аватарка отзыва">
        <div class="service-card__item-human--name">
            <span>{{ $item['name']}}</span>
            <div class="item-human--stars">
                <i><img src="{{ asset('/icons/sub-star-icon.svg') }}" alt="Звёздочка рейтинга"></i>
                <i><img src="{{ asset('/icons/sub-star-icon.svg') }}" alt="Звёздочка рейтинга"></i>
                <i><img src="{{ asset('/icons/sub-star-icon.svg') }}" alt="Звёздочка рейтинга"></i>
                <i><img src="{{ asset('/icons/sub-star-icon.svg') }}" alt="Звёздочка рейтинга"></i>
                <i><img src="{{ asset('/icons/sub-star-icon.svg') }}" alt="Звёздочка рейтинга"></i>
            </div>
        </div>
    </div>
    <div class="service-card__item-text">
        <p>{{ $item['text']}}
        </p>
    </div>
    <div class="service-card__item-detail">
        <p><a href="{{ config('lend_data.header.y_lnk') }}">Читать на Яндекс Услуги</a></p>
    </div>
</div>
