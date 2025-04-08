        <div class="container">
            <div class="footer__info">
                <img src="{{ asset('icons/footer-stars.svg') }}" class="footer__info-logo"
                        alt="Логотип Александра Потапова">
                <p class="stars_summary">Рейтинг в Яндекс <strong>на основе более 50 оценок</strong></p>
                <p class="footer__info-master">АЛЕКСАНДР ПОТАПОВ</p>
                <p class="footer__info-text">Тот самый ведущий...</p>
                <p class="footer__info-phone"><a
                        href="tel:+7{{ phone_format(config('lend_data.header.phone')) }}">{{ config('lend_data.header.phone') }}</a>
                </p>
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
