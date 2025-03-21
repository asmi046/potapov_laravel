@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)


@section('main')
    <header class="header">
        <x-main-header></x-main-header>
    </header>

    <section id="preview" class="preview">
        <x-preview></x-preview>
    </section>

    <section class="service">
        <x-translator></x-translator>
    </section>

    <section class="video">
        <div class="container">
            <h2 class="section-title">ВИДЕО</h2>
            <swiper-container id="video_swiper">
                <swiper-slide>
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/animal-show-vertical.mp4') }}"
                        class="video-content">
                        <video style="display: none" src="{{ asset('video/animal-show-vertical.mp4') }}"
                            poster="{{ asset('/images/video.png') }}"></video>
                        <img src="{{ asset('/images/animal-show-prev.webp') }}" alt="Превью-фото шоу с дикими животными">
                        <div class="play-icon">
                            <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                        </div>
                        <div class="video-content__text">
                            <p>- Змей искуситель!?</p>
                            <p>- No!</p>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/reels-league.mp4') }}"
                        class="video-content">
                        <video style="display: none" src="{{ asset('video/reels-league.mp4') }}"
                            poster="{{ asset('/images/90e-prev.webp') }}"></video>
                        <img src="{{ asset('/images/90e-prev.webp') }}" alt="Превью фото Аля 90-е">
                        <div class="play-icon">
                            <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                        </div>
                        <div class="video-content__text">
                            <p>Аля 90-е!</p>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/norder-potapov-reels.mp4') }}"
                        class="video-content">
                        <video style="display: none" src="{{ asset('video/norder-potapov-reels.mp4') }}"
                            poster="{{ asset('/images/happy-new-year-prev.webp') }}"></video>
                        <img src="{{ asset('/images/happy-new-year-prev.webp') }}"
                            alt="Превью фото к видео Новогоднее приключение">
                        <div class="play-icon">
                            <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                        </div>
                        <div class="video-content__text">
                            <p>Новогоднее</p>
                            <p>Приключение 2025</p>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/reels-nzc-pot-clip1.mp4') }}"
                        class="video-content">
                        <video style="display: none" src="{{ asset('video/reels-nzc-pot-clip1.mp4') }}"
                            poster="{{ asset('/images/disco-prev.webp') }}"></video>
                        <img src="{{ asset('/images/disco-prev.webp') }}" alt="Фото превю видео Дискотека танцуют все">
                        <div class="play-icon">
                            <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                        </div>
                        <div class="video-content__text">
                            <p>Дискотека</p>
                            <p>Танцуют ВСЕ!</p>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/animal-show-vertical.mp4') }}"
                        class="video-content">
                        <video style="display: none" src="{{ asset('/video/animal-show-vertical.mp4') }}"
                            poster="{{ asset('/images/video.png') }}"></video>
                        <img src="{{ asset('/images/video.png') }}" alt="">
                        <div class="play-icon">
                            <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                        </div>
                        <div class="video-content__text">
                            <p>Шоу с дикими</p>
                            <p>Животными</p>
                        </div>
                    </a>
                </swiper-slide>

                <swiper-slide>
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/norder-potapov-reels.mp4') }}"
                        class="video-content">
                        <video style="display: none" src="{{ asset('video/norder-potapov-reels.mp4') }}"
                            poster="{{ asset('/images/happy-new-year-prev.webp') }}"></video>
                        <img src="{{ asset('/images/happy-new-year-prev.webp') }}"
                            alt="Превью фото к видео Новогоднее приключение">
                        <div class="play-icon">
                            <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                        </div>
                        <div class="video-content__text">
                            <p>Новогоднее</p>
                            <p>Приключение 2025</p>
                        </div>
                    </a>
                </swiper-slide>

                <swiper-slide>
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/animal-show-vertical.mp4') }}"
                        class="video-content">
                        <video style="display: none" src="{{ asset('video/animal-show-vertical.mp4') }}"
                            poster="{{ asset('/images/video.png') }}"></video>
                        <img src="{{ asset('/images/animal-show-prev.webp') }}" alt="Превью-фото шоу с дикими животными">
                        <div class="play-icon">
                            <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                        </div>
                        <div class="video-content__text">
                            <p>- Змей искуситель!?</p>
                            <p>- No!</p>
                        </div>
                    </a>
                </swiper-slide>

                <swiper-slide>
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/animal-show-vertical.mp4') }}"
                        class="video-content">
                        <video style="display: none" src="{{ asset('/video/animal-show-vertical.mp4') }}"
                            poster="{{ asset('/images/video.png') }}"></video>
                        <img src="{{ asset('/images/video.png') }}" alt="">
                        <div class="play-icon">
                            <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                        </div>
                        <div class="video-content__text">
                            <p>Шоу с дикими</p>
                            <p>Животными</p>
                        </div>
                    </a>
                </swiper-slide>

            </swiper-container>
        </div>
    </section>

    <section class="price">
        <x-price></x-price>
    </section>

    <section class="photograph">
        <x-photograph></x-photograph>
    </section>

    <section class="promo">
        <div class="container">
            <h2 class="section-title">PROMO 2025</h2>
            <video style="border-radius: 20px;" autoplay muted controls src="{{ asset('/video/promo_2023.mp4') }}"  ></video>
        </div>
    </section>

    <footer class="footer">
        <x-footer></x-footer>
    </footer>
@endsection
