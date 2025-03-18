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
                    <a data-fslightbox="page-galery" data-autoplay href="{{ asset('video/liga.mp4') }}" class="video-content">

                            <video style="display: none" src="{{ asset('video/liga.mp4') }}" poster="{{ asset('/images/video.png') }}"></video>

                        <img src="{{ asset('/images/video.png') }}" alt="">
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

    <footer class="footer">
        <x-footer></x-footer>
    </footer>
@endsection
