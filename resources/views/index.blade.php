@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)


@section('main')
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="header__topbar">
                    <a href="#">
                        <img src="{{ asset('icons/logo-potapov-event.svg') }}" class="header__topbar-logo"
                            alt="Логотип Александра Потапова">
                    </a>
                    <div class="header__topbar-contact">
                        <div class="header__topbar-social">
                            <a href="#">
                                <img src="{{ asset('icons/whatsapp-icon.svg') }}" alt="Иконка мессенджера WhatsApp">
                            </a>
                            <a href="#">
                                <img src="{{ asset('icons/tg-icon.svg') }}" alt="Иконка мессенджера Telegram">
                            </a>
                            <a href="#">
                                <img src="{{ asset('icons/vk-icon.svg') }}" alt="Иконка социальной сети Вконтакте">
                            </a>
                        </div>
                        <a class="header__topbar-phone" href="tel:89207053348">+7 920-705-33-48</a>
                    </div>
                </div>
                <div class="header__bottombar">
                    <h1>АЛЕКСАНДР ПОТАПОВ</h1>
                    <p>Ведущий и организатор праздничных мероприятий с опытом работы более 15 лет.</p>
                    <a class="header__bottombar-btn yakor" href="#preview">Давайте знакомиться</a>
                </div>

                <div class="header__companies">
                    <img class="companies__russia-one" src="{{ asset('/icons/Russia1-icon.svg') }}"
                        alt="Иконка телеканала Россия 1">
                    <img class="companies__sberbank" src="{{ asset('/icons/Sber-icon.svg') }}" alt="Иконка Сбербанка">
                    <img class="companies__sibur" src="{{ asset('/icons/Sibur-icon.svg') }}" alt="Иконка Сибур">
                    <img class="companies__ildebote" src="{{ asset('/icons/Ille-de-Beaute-icon.svg') }}"
                        alt="Иконка Иль де Ботэ">
                    <img class="companies__lukoil" src="{{ asset('/icons/Lukoil-icon.svg') }}" alt="Иконка Лукойл">
                </div>
            </div>
        </div>
    </header>
    <section id="preview" class="preview">
        <div class="container">
            <div class="preview-wrapper">
                <div class="preview__block-img">
                    <img src="{{ asset('images/profile-photo.webp') }}" alt="Фото-карточка Александра Потапова">
                    <div class="preview__block-img__social">
                        <a href="#">
                            <img src="{{ asset('icons/whatsapp-with-photo.svg') }}" alt="Иконка мессенджера WhatsApp">
                        </a>
                        <a href="#">
                            <img src="{{ asset('icons/tg-with-photo.svg') }}" alt="Иконка мессенджера Telegram">
                        </a>
                    </div>
                </div>

                <div class="preview__block-card">
                    <h2>Всем привет! Меня зовут<br> <span>Александр Потапов</span></h2>

                    <div class="preview__block-card__text">
                        <p>
                            И я - профессиональный ведущий с 15 - летним опытом в организации и проведении мероприятий! ️Мой
                            стиль — современная классика! Избегаю банальных конкурсов и пошлых шуток. Только индивидуальный
                            подход и персонализированная программа.
                        </p>
                        <p>
                            Работаю в тандеме с опытным диджеем, чтобы обеспечить качественное музыкальное сопровождение.
                            Использую современные диджитал-игры и интерактивные конкурсы с кнопками для викторин.
                        </p>
                        <p>
                            Давайте сделаем из вашего события не просто рядовое торжество, а яркое и запоминающееся шоу!
                        </p>
                    </div>

                    <div class="preview__block-card__skills">
                        <div class="skills__group">
                            <div class="skills__group-values">
                                <p>Харизма</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-charisma.svg') }}"
                                        alt="Иконка шкалы максимальной харизмы">
                                    <span>90%</span>
                                </div>
                            </div>
                            <div class="skills__group-values">
                                <p>Позитив</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-positive.svg') }}"
                                        alt="Иконка шкалы максимальной позитива">
                                    <span>91%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skills__group">
                            <div class="skills__group-values">
                                <p>Опыт</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-exp.svg') }}"
                                        alt="Иконка шкалы максимального опыта">
                                    <span>89%</span>
                                </div>
                            </div>
                            <div class="skills__group-values">
                                <p>Романтика</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-romantic.svg') }}"
                                        alt="Иконка шкалы максимального романтика">
                                    <span>88%</span>
                                </div>
                            </div>
                        </div>

                        <div class="skills__group">
                            <div class="skills__group-values">
                                <p>Надежность</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-nadejnost.svg') }}"
                                        alt="Иконка шкалы максимальной надежности">
                                    <span>99%</span>
                                </div>
                            </div>
                            <div class="skills__group-values">
                                <p>Веселье</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-veselue.svg') }}"
                                        alt="Иконка шкалы максимального веселья">
                                    <span>92%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="preview__block-additionally">
                    <img src="{{ asset('/images/profile-with-didjey.webp') }}"
                        alt="Фото-карточка Александра Потапова с диджеем">
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <h2 class="section-title comments">ОТЗЫВЫ <i class="section-title--icons"></i></h2>

            <div class="service-start__preview">
                <img src="{{ asset('icons/main-star-icon.svg') }}" alt="Иконка здвезды рейтинга">
                <p>5.0 <span>45 отзывов</span></p>
            </div>

            <div class="service-card">
                <div class="service-card__item">
                    <div class="service-card__item-human">
                        <img src="{{ asset('/images/services-human.png') }}" alt="Аватарка отзыва">
                        <div class="service-card__item-human--name">
                            <span>Инна</span>
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
                        <p>Большое спасибо! Самое главное, что он очень долго стоял и радовал своей красотой и нежным
                            запахом. Скоро свадьба моей подруги, теперь я знаю, куда идти за красивым нежным букетиком.</p>
                    </div>
                    <div class="service-card__item-detail">
                        <p><a href="#">Читать на Яндекс Услуги</a></p>
                    </div>
                </div>
                <div class="service-card__item">
                    <div class="service-card__item-human">
                        <img src="{{ asset('/images/services-human.png') }}" alt="Аватарка отзыва">
                        <div class="service-card__item-human--name">
                            <span>Инна</span>
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
                        <p>Большое спасибо! Самое главное, что он очень долго стоял и радовал своей красотой и нежным
                            запахом. Скоро свадьба моей подруги, теперь я знаю, куда идти за красивым нежным букетиком.</p>
                    </div>
                    <div class="service-card__item-detail">
                        <p><a href="#">Читать на Яндекс Услуги</a></p>
                    </div>
                </div>
                <div class="service-card__item">
                    <div class="service-card__item-human">
                        <img src="{{ asset('/images/services-human.png') }}" alt="Аватарка отзыва">
                        <div class="service-card__item-human--name">
                            <span>Инна</span>
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
                        <p>Большое спасибо! Самое главное, что он очень долго стоял и радовал своей красотой и нежным
                            запахом. Скоро свадьба моей подруги, теперь я знаю, куда идти за красивым нежным букетиком.</p>
                    </div>
                    <div class="service-card__item-detail">
                        <p><a href="#">Читать на Яндекс Услуги</a></p>
                    </div>
                </div>
                <div class="service-card__item">
                    <div class="service-card__item-human">
                        <img src="{{ asset('/images/services-human.png') }}" alt="Аватарка отзыва">
                        <div class="service-card__item-human--name">
                            <span>Инна</span>
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
                        <p>Большое спасибо! Самое главное, что он очень долго стоял и радовал своей красотой и нежным
                            запахом. Скоро свадьба моей подруги, теперь я знаю, куда идти за красивым нежным букетиком.</p>
                    </div>
                    <div class="service-card__item-detail">
                        <p><a href="#">Читать на Яндекс Услуги</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video">
        <div class="container">
            <h2 class="section-title">ВИДЕО</h2>
            <swiper-container slides-per-view="4" loop="true" space-between="48">
                <swiper-slide>
                    <div class="video-content">
                        <img src="{{ asset('/images/video.png') }}" alt="">
                        <div class="video-content__text">
                            <p>- Змей искуситель!?</p>
                            <p>- No!</p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="video-content">
                        <img src="{{ asset('/images/video.png') }}" alt="">
                        <div class="video-content__text">
                            <p>Аля 90-е!</p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="video-content">
                        <img src="{{ asset('/images/video.png') }}" alt="">
                        <div class="video-content__text">
                            <p>Новогоднее</p>
                            <p>Приключение 2025</p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="video-content">
                        <img src="{{ asset('/images/video.png') }}" alt="">
                        <div class="video-content__text">
                            <p>Дискотека</p>
                            <p>Танцуют ВСЕ!</p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="video-content">
                        <img src="{{ asset('/images/video.png') }}" alt="">
                        <div class="video-content__text">
                            <p>Шоу с дикими</p>
                            <p>Животными</p>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </section>

    <section class="price">
        <div class="container">
            <h2 class="section-title">ПРАЙС 2025</h2>
            <div class="price-wrapper">
                <div class="price__item">
                    <div class="price__item-title">55 000 руб.</div>
                    <p class="price__item-text">Услуги ведущего + комплект<br> digital игр</p>
                </div>

                <div class="price__item">
                    <div class="price__item-title">25 000 руб.</div>
                    <p class="price__item-text">Услуги диджея +<br> звук</p>
                </div>

                <div class="price__item">
                    <div class="price__item-title">от 10 000 руб.</div>
                    <p class="price__item-text">Световое оформление<br> мероприятия</p>
                </div>

                <div class="price__item">
                    <div class="price__item-title">15 000 руб.</div>
                    <p class="price__item-text">Проведение выездной<br> регистрации под ключ</p>
                </div>

                <div class="price__item">
                    <div class="price__item-title">16 000 руб.</div>
                    <p class="price__item-text">Тяжелый дым<br> 2 зала</p>
                </div>
            </div>
        </div>
    </section>

    <section class="photograph">
        <div class="container">
            <h2 class="section-title">ФОТОАЛЬБОМ</h2>
            <div class="photograph__gallery">
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo1.webp') }}" alt="Фотографии работы ведущего Александра Потапова">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo2.webp') }}" alt="Фотографии работы ведущего Александра Потапова">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo3.png') }}" alt="Фотографии работы ведущего Александра Потапова">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo4.webp') }}" alt="Фотографии работы ведущего Александра Потапова">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo5.webp') }}" alt="Фотографии работы ведущего Александра Потапова">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo6.png') }}" alt="Фотографии работы ведущего Александра Потапова">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo7.png') }}" alt="Фотографии работы ведущего Александра Потапова">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo8.webp') }}" alt="Фотографии работы ведущего Александра Потапова">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__info">
                <a href="#">
                    <img src="{{ asset('icons/logo-potapov-event.svg') }}" class="footer__info-logo"
                        alt="Логотип Александра Потапова">
                </a>
                <p class="footer__info-master">АЛЕКСАНДР ПОТАПОВ</p>
                <p class="footer__info-text">Тот самый ведущий...</p>
                <div class="footer__info-social">
                    <a href="#">
                        <img src="{{ asset('icons/whatsapp-icon.svg') }}" alt="Иконка мессенджера WhatsApp">
                    </a>
                    <a href="#">
                        <img src="{{ asset('icons/tg-icon.svg') }}" alt="Иконка мессенджера Telegram">
                    </a>
                    <a href="#">
                        <img src="{{ asset('icons/vk-icon.svg') }}" alt="Иконка социальной сети Вконтакте">
                    </a>
                </div>
            </div>
        </div>
    </footer>
@endsection
