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
                @foreach (config('lend_data.video') as $item)
                    <swiper-slide>
                        <a data-fslightbox="page-galery" data-autoplay href="{{ asset($item['src']) }}" class="video-content">
                            <video playsinline style="display: none" src="{{ asset($item['src']) }}"
                                poster="{{ asset($item['promo']) }}"></video>
                            <img src="{{ asset($item['promo']) }}" alt="Видео с Александром Потаповым">
                            <div class="play-icon">
                                <img src="{{ asset('/icons/play-video.svg') }}" alt="Иконка старта видео">
                            </div>
                            <div class="video-content__text">
                                {!! $item['text'] !!}
                            </div>
                        </a>
                    </swiper-slide>
                @endforeach


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
            <h2 class="section-title">PROMO 2026</h2>
            <video style="border-radius: 20px;" autoplay loop muted controls
                src="{{ asset('/video/promo_2023.mp4') }}"></video>
        </div>
    </section>

    <footer class="footer">
        <x-footer></x-footer>
    </footer>
@endsection
