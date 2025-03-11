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
                    <img src="{{ asset('icons/logo-potapov-event.svg') }}" class="header__topbar-logo"
                        alt="Логотип Александра Потапова">
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
                    <a class="btn" href="#">Давайте знакомиться</a>
                </div>
            </div>
        </div>
    </header>
    <section class="preview">
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
                    <h2>Всем привет! Меня зовут<br> <span>Алексендр Потапов</span></h2>

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
                                    <strong>90%</strong>
                                </div>
                            </div>
                            <div class="skills__group-values">
                                <p>Позитив</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-positive.svg') }}"
                                        alt="Иконка шкалы максимальной позитива">
                                    <strong>91%</strong>
                                </div>
                            </div>
                        </div>

                        <div class="skills__group">
                            <div class="skills__group-values">
                                <p>Опыт</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-exp.svg') }}"
                                        alt="Иконка шкалы максимального опыта">
                                    <strong>89%</strong>
                                </div>
                            </div>
                            <div class="skills__group-values">
                                <p>Романтика</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-romantic.svg') }}"
                                        alt="Иконка шкалы максимального романтика">
                                    <strong>88%</strong>
                                </div>
                            </div>
                        </div>

                        <div class="skills__group">
                            <div class="skills__group-values">
                                <p>Надежность</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-nadejnost.svg') }}"
                                        alt="Иконка шкалы максимальной надежности">
                                    <strong>99%</strong>
                                </div>
                            </div>
                            <div class="skills__group-values">
                                <p>Веселье</p>
                                <div>
                                    <img src="{{ asset('icons/skills-icon-veselue.svg') }}"
                                        alt="Иконка шкалы максимального веселья">
                                    <strong>92%</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <img src="{{ asset('images/photo1.png') }}" alt="">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo2.png') }}" alt="">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo3.png') }}" alt="">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo4.png') }}" alt="">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo5.png') }}" alt="">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo6.png') }}" alt="">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo7.png') }}" alt="">
                </div>
                <div class="photograph__gallery-photo">
                    <img src="{{ asset('images/photo8.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__info">
                <img src="{{ asset('icons/logo-potapov-event.svg') }}" class="footer__info-logo"
                    alt="Логотип Александра Потапова">
                <div>АЛЕКСАНДР ПОТАПОВ</div>
                <p>Тот самый ведущий...</p>
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
