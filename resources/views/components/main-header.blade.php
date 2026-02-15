<!-- resources/views/index.blade.php -->

<div class="container">
    <div class="header-wrapper">
        <div class="header__topbar">
            <a href="{{ route('home') }}">
                <img src="{{ asset('icons/logo-potapov-event.svg') }}" class="header__topbar-logo"
                    alt="Логотип Александра Потапова">
            </a>
            <div class="header__topbar-contact">
                <div class="header__topbar-social">
                    <a onclick="ym(53850847,'reachGoal','clSocial')" href="{{ config('lend_data.header.ws_lnk') }}">
                        <img src="{{ asset('icons/whatsapp-icon.svg') }}" alt="Иконка мессенджера WhatsApp">
                    </a>
                    <a onclick="ym(53850847,'reachGoal','clSocial')" href="{{ config('lend_data.header.tg_lnk') }}">
                        <img src="{{ asset('icons/tg-icon.svg') }}" alt="Иконка мессенджера Telegram">
                    </a>
                    <a onclick="ym(53850847,'reachGoal','clSocial')" href="{{ config('lend_data.header.vk_lnk') }}">
                        <img src="{{ asset('icons/vk-icon.svg') }}" alt="Иконка социальной сети Вконтакте">
                    </a>
                </div>
                <a class="header__topbar-phone"
                    href="tel:+7{{ phone_format(config('lend_data.header.phone')) }}">{{ config('lend_data.header.phone') }}</a>
            </div>
        </div>
        <div class="header__bottombar">
            <h1>АЛЕКСАНДР ПОТАПОВ</h1>
            <p>Выпускник школы «Первого канала». Телеведущий и диктор на телеканале Россия 1, ведущий программы «Вести».
                Работал на одной сцене с такими звёздами, как: L’One, группа “Каста”, Бурито, Тина Кузнецова, “Ottawan”,
                ”Волга-Волга”, Ильёй Соболевым, Иваном Абрамовым, Нурланом Сабуровым и тд.</p>
            <a class="header__bottombar-btn yakor" href="#preview">Давайте знакомиться</a>
        </div>

        {{-- <div class="header__companies">
            <img src="{{ asset('/icons/Russia1-icon.svg') }}" alt="Иконка телеканала Россия 1">
            <img src="{{ asset('/icons/Sber-icon.svg') }}" alt="Иконка Сбербанка">
            <img src="{{ asset('/icons/Sibur-icon.svg') }}" alt="Иконка Сибур">
            <img src="{{ asset('/icons/Ille-de-Beaute-icon.svg') }}" alt="Иконка Иль де Ботэ">
            <img src="{{ asset('/icons/Lukoil-icon.svg') }}" alt="Иконка Лукойл">
        </div> --}}



    </div>
</div>
