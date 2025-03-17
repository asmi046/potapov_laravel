<!-- resources/views/index.blade.php -->

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
            <img src="{{ asset('/icons/Russia1-icon.svg') }}" alt="Иконка телеканала Россия 1">
            <img src="{{ asset('/icons/Sber-icon.svg') }}" alt="Иконка Сбербанка">
            <img src="{{ asset('/icons/Sibur-icon.svg') }}" alt="Иконка Сибур">
            <img src="{{ asset('/icons/Ille-de-Beaute-icon.svg') }}" alt="Иконка Иль де Ботэ">
            <img src="{{ asset('/icons/Lukoil-icon.svg') }}" alt="Иконка Лукойл">
        </div>
    </div>
</div>
