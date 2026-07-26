@php
    $packages = [
        [
            'image'    => asset('images/tarif/tarif_1.webp'),
            'name'     => 'Стандартный',
            'price'    => '100 000 ₽',
            'featured' => false,
            'features' => [
                'Ведение свадьбы с 17 до 22.',
                'Диджейское сопровождение с 16 до 23.',
                '1 встреча офлайн, создание тайминга мероприятия, подписание договора',
                '1 видео-созвон: согласование развлекательной части, разбор фишек и игровых механик',
                'Совместный чат для подготовки',
            ],
        ],
        [
            'image'    => asset('images/tarif/tarif_2.webp'),
            'name'     => 'Комфорт',
            'price'    => '130 000 ₽',
            'featured' => true,
            'features' => [
                'Ведение свадьбы с 15 до 23 часов: welcome, церемония и банкет.',
                'Диджейское сопровождение с 14 до 23 + вокал',
                '2 встречи офлайн, создание тайминга мероприятия и за неделю до события',
                '2 видео-созвона: согласование развлекательной части, разбор фишек и игровых механик + согласование церемонии (истории любви)',
                'Совместный чат для подготовки',
            ],
        ],
        [
            'image'    => asset('images/tarif/tarif_3.webp'),
            'name'     => 'VIP',
            'price'    => '150 000 ₽',
            'featured' => false,
            'features' => [
                'Ведение свадьбы с 15 до 23 часов: welcome, церемония и банкет.',
                'Диджейское сопровождение с 14 до 23 + вокал',
                'Первоклассный гитарист на welcome',
                'Живые встречи и зумы по запросу',
                'Совместный чат для подготовки',
            ],
        ],
    ];
@endphp

<div class="pricing">
    @foreach ($packages as $package)
        <article class="card{{ $package['featured'] ? ' card--featured' : '' }}">
            @if ($package['featured'])
                <span class="badge">Оптимально</span>
            @endif

            <div class="card__img">
                <img src="{{ $package['image'] }}" alt="{{ $package['name'] }}">
            </div>

            <h2 class="card__name">{{ $package['name'] }}</h2>

            <div class="price">
                <span class="price__value">{{ $package['price'] }}</span>
                <span class="price__unit">/под ключ</span>
            </div>

            <ul class="features">
                @foreach ($package['features'] as $feature)
                    <li>
                        <span class="ico ico--ok">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        {{ $feature }}
                    </li>
                @endforeach
            </ul>

            <a href="#" class="card__btn">Заказать</a>
        </article>
    @endforeach
</div>
