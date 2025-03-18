        <div class="container">
            <div class="footer__info">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('icons/logo-potapov-event.svg') }}" class="footer__info-logo"
                        alt="Логотип Александра Потапова">
                </a>
                <p class="footer__info-master">АЛЕКСАНДР ПОТАПОВ</p>
                <p class="footer__info-text">Тот самый ведущий...</p>
                <div class="footer__info-social">
                    <a href="{{ config('lend_data.header.ws_lnk') }}">
                        <img src="{{ asset('icons/whatsapp-icon.svg') }}" alt="Иконка мессенджера WhatsApp">
                    </a>
                    <a href="{{ config('lend_data.header.tg_lnk') }}">
                        <img src="{{ asset('icons/tg-icon.svg') }}" alt="Иконка мессенджера Telegram">
                    </a>
                    <a href="{{ config('lend_data.header.vk_lnk') }}">
                        <img src="{{ asset('icons/vk-icon.svg') }}" alt="Иконка социальной сети Вконтакте">
                    </a>
                </div>
            </div>
        </div>
