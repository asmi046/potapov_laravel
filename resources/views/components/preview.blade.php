        <div class="container">
            <div class="preview-wrapper">
                <div class="palaroid_section">
                    <div class="preview__block-img">
                        <div class="pict_wrapper">
                            <swiper-container slides-per-view="1" loop="true" autoplay="true" delay="2500">
                                <swiper-slide>
                                    <img src="{{ asset('images/profile-photo.webp') }}" alt="Фото-карточка Александра Потапова">
                                </swiper-slide>

                                <swiper-slide>
                                    <img src="{{ asset('images/profile-with-didjey.webp') }}" alt="Фото-карточка Александра Потапова">
                                </swiper-slide>
                            </swiper-container>
                        </div>


                        <div class="preview__block-img__social">
                            <a href="{{ config('lend_data.header.ws_lnk') }}">
                                <img src="{{ asset('icons/whatsapp-with-photo.svg') }}" alt="Написать в WhatsApp">
                            </a>
                            <a href="{{ config('lend_data.header.tg_lnk') }}">
                                <img src="{{ asset('icons/tg-with-photo.svg') }}" alt="Написать в Telegram">
                            </a>
                        </div>
                    </div>
                </div>


                <div class="preview__block-card">
                    <h2>Всем привет! Меня зовут<br> <span>Александр Потапов</span></h2>

                    <div class="preview__block-card__text">
                        <p>
                            И я - профессиональный ведущий с 15 - летним опытом в организации и проведении мероприятий! Мой стиль — современная классика! Избегаю банальных конкурсов и пошлых шуток. Только индивидуальный подход и персонализированная программа.
                        </p>
                        <p>
                            Работаю в тандеме с опытным диджеем, чтобы обеспечить качественное музыкальное сопровождение. Использую современные диджитал-игры и интерактивные конкурсы с кнопками для викторин.
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
                                    <img src="{{ asset('icons/skills-icon-charisma.svg') }}"
                                        alt="Иконка шкалы максимального опыта">
                                    <span>95%</span>
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
                {{-- <div class="preview__block-additionally">
                    <img src="{{ asset('/images/profile-with-didjey.webp') }}"
                        alt="Фото-карточка Александра Потапова с диджеем">
                </div> --}}
            </div>
        </div>
