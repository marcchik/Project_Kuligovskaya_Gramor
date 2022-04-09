</main>
<footer class="footer">
    <div class="wrap">
        <div class="footer__search-mob">
            <input type="text" class="input" placeholder="Поиск">
        </div>
        <div class="footer__top">
            <div class="header__wrap">
                <a href="index.html" class="logo">
                    <img src="./img/main/logo.svg">
                </a>
                <div class="header__des">
                    <div class="header__row">
                        <div class="footer__top__wrap">
                            <nav class="top-nav">
                                <ul class="list-reset">
                                    <li>
                                        <a href=""> О компании</a>
                                    </li>
                                    <li>
                                        <a href="">Новости</a>
                                    </li>
                                    <li>
                                        <a href="">Услуги</a>
                                    </li>
                                    <li>
                                        <a href="">Команда</a>
                                    </li>
                                    <li>
                                        <a href="">Вакансии</a>
                                    </li>
                                    <li>
                                        <a href="">Отзывы</a>
                                    </li>
                                    <li>
                                        <a href="">Контакты</a>
                                    </li>

                                </ul>
                            </nav>
                            <div class="footer__search">
                                <input type="text" class="input" placeholder="Поиск">
                            </div>
                        </div>
                    </div>
                    <div class="header__row">
                        <div class="header__mid">
                            <a href="" class="header__location">
                                <div class="header__location__img">
                                    <img src="./img/main/location.png">
                                </div>
                                <div class="header__location__text">
                                    Екатеринбург, FC Limerance, оф.703
                                </div>
                            </a>
                            <div class="header__mid__right">
                                <ul class="header__soc list-reset">
                                    <li>
                                        <a href="">
                                            <svg width="14" height="14">
                                                <use xlink:href="./img/sprite.svg#what"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg width="14" height="14">
                                                <use xlink:href="./img/sprite.svg#tg"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg width="14" height="14">
                                                <use xlink:href="./img/sprite.svg#phone"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <a href="tel:+73433009340" class="header__phone">
                                    <span>+7 (343)</span> 300-93-40
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__mob">
                    <a href="" class="header__mob__phone">
                        <svg width="14" height="14">
                            <use xlink:href="./img/sprite.svg#phone"></use>
                        </svg>
                    </a>
                    <button type="button" class="burger btn-reset" id="burger-footer">
                        <svg width="18" height="10" class="burger-open">
                            <use xlink:href="./img/sprite.svg#burger-open"></use>
                        </svg>
                        <svg width="24" height="24" class="burger-close">
                            <use xlink:href="./img/sprite.svg#burger-close"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="footer__bot">
            <div class="footer__bot__item">
                © ООО «Кулиговская и Партнёры», 2016
            </div>
            <div class="footer__bot__item">
                Все права защищены
            </div>
            <div class="footer__bot__item">
                Сайт разработан в Gramor
            </div>
        </div>
    </div>
</footer>
<section class="modal_form" id="ask_questions">
    <div class="modal_form__wrap">
        <form class="content_modal_form">
            <div class="box_close_btn_modal_form">
                <button type="button" class="close_modal_form btn-reset active"
                        onclick="CloseModal('ask_questions')">
                    <svg width="24" height="24" class="burger-close">
                        <use xlink:href="./img/sprite.svg#burger-close"></use>
                    </svg>
                </button>
            </div>
            <div class="title_modal_form">Задать вопрос</div>
            <div class="mini_text_modal_form">Оставьте заявку на звонок</div>
            <div class="big_inputs_box_modal_form">
                <div class="input_icon_modal_form">
                    <div class="icon_modal_form">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path d="M15 15.75V14.25C15 13.4544 14.6839 12.6913 14.1213 12.1287C13.5587 11.5661 12.7956 11.25 12 11.25H6C5.20435 11.25 4.44129 11.5661 3.87868 12.1287C3.31607 12.6913 3 13.4544 3 14.25V15.75"
                                      stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M9 8.25C10.6569 8.25 12 6.90685 12 5.25C12 3.59315 10.6569 2.25 9 2.25C7.34315 2.25 6 3.59315 6 5.25C6 6.90685 7.34315 8.25 9 8.25Z"
                                      stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </div>
                    <input type="text" placeholder="Ваше имя">
                </div>
                <div class="input_icon_modal_form">
                    <div class="icon_modal_form">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path d="M3.33317 3.33337H16.6665C17.5832 3.33337 18.3332 4.08337 18.3332 5.00004V15C18.3332 15.9167 17.5832 16.6667 16.6665 16.6667H3.33317C2.4165 16.6667 1.6665 15.9167 1.6665 15V5.00004C1.6665 4.08337 2.4165 3.33337 3.33317 3.33337Z"
                                      stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M18.3332 5L9.99984 10.8333L1.6665 5" stroke="white" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </div>
                    <input type="text" placeholder="Ваш E-mail">
                </div>
                <div class="textarea_modal_form">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Текст вопроса"></textarea>
                </div>
            </div>
            <button class="btn_modal_form">Оставить заявку</button>
            <div class="policy_modal_form">
                <div class="label-cbx ">
                    <input type="radio" checked class="invisible">
                    <div class="checkbox">
                        <svg width="20px" height="20px" viewBox="0 0 20 20">
                            <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                            <polyline points="4 11 8 15 16 6"></polyline>
                        </svg>
                    </div>
                    <div>Я соглашаюсь на обработку <a href="">персональных данных</a></div>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="modal_form" id="ask_viewing">
    <div class="modal_form__wrap">
        <form class="content_modal_form">
            <div class="box_close_btn_modal_form">
                <button type="button" class="close_modal_form btn-reset active" onclick="CloseModal('ask_viewing')">
                    <svg width="24" height="24" class="burger-close">
                        <use xlink:href="./img/sprite.svg#burger-close"></use>
                    </svg>
                </button>
            </div>
            <div class="title_modal_form">Оставьте заявку на просмотр</div>
            <div class="mini_text_modal_form">Оставьте заявку на звонок</div>
            <div class="inputs_box_modal_form">
                <div class="input_icon_modal_form">
                    <div class="icon_modal_form">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path d="M15 15.75V14.25C15 13.4544 14.6839 12.6913 14.1213 12.1287C13.5587 11.5661 12.7956 11.25 12 11.25H6C5.20435 11.25 4.44129 11.5661 3.87868 12.1287C3.31607 12.6913 3 13.4544 3 14.25V15.75"
                                      stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M9 8.25C10.6569 8.25 12 6.90685 12 5.25C12 3.59315 10.6569 2.25 9 2.25C7.34315 2.25 6 3.59315 6 5.25C6 6.90685 7.34315 8.25 9 8.25Z"
                                      stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </div>
                    <input type="text" placeholder="Ваше имя">
                </div>
                <div class="input_icon_modal_form">
                    <div class="icon_modal_form">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path d="M3.33317 3.33337H16.6665C17.5832 3.33337 18.3332 4.08337 18.3332 5.00004V15C18.3332 15.9167 17.5832 16.6667 16.6665 16.6667H3.33317C2.4165 16.6667 1.6665 15.9167 1.6665 15V5.00004C1.6665 4.08337 2.4165 3.33337 3.33317 3.33337Z"
                                      stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M18.3332 5L9.99984 10.8333L1.6665 5" stroke="white" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </div>
                    <input type="text" placeholder="Ваш E-mail">
                </div>
                <div class="input_icon_modal_form">
                    <div class="icon_modal_form">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.5">
                                <path d="M14.7128 11.4013V13.4013C14.7136 13.587 14.6756 13.7708 14.6012 13.9409C14.5268 14.111 14.4177 14.2637 14.2809 14.3892C14.1441 14.5147 13.9826 14.6103 13.8067 14.6698C13.6308 14.7293 13.4444 14.7514 13.2595 14.7347C11.2081 14.5117 9.23751 13.8107 7.50618 12.688C5.8954 11.6644 4.52974 10.2988 3.50618 8.68799C2.3795 6.94879 1.67834 4.96865 1.45951 2.90799C1.44285 2.72363 1.46476 2.53783 1.52385 2.3624C1.58293 2.18698 1.67789 2.02578 1.80269 1.88907C1.92749 1.75236 2.07938 1.64313 2.24871 1.56834C2.41803 1.49354 2.60107 1.45483 2.78618 1.45465H4.78618C5.10972 1.45147 5.42337 1.56604 5.66869 1.77701C5.914 1.98798 6.07423 2.28095 6.11951 2.60132C6.20393 3.24137 6.36048 3.86981 6.58618 4.47465C6.67588 4.71327 6.69529 4.9726 6.64212 5.22191C6.58895 5.47122 6.46542 5.70006 6.28618 5.88132L5.43951 6.72799C6.38855 8.39702 7.77048 9.77895 9.43951 10.728L10.2862 9.88132C10.4674 9.70208 10.6963 9.57855 10.9456 9.52538C11.1949 9.47221 11.4542 9.49162 11.6928 9.58132C12.2977 9.80702 12.9261 9.96357 13.5662 10.048C13.89 10.0937 14.1858 10.2568 14.3972 10.5063C14.6086 10.7558 14.721 11.0744 14.7128 11.4013Z"
                                      fill="white"/>
                            </g>
                        </svg>
                    </div>
                    <input type="text" placeholder="Ваш номер телефона">
                </div>
            </div>
            <button class="btn_modal_form">Оставить заявку</button>
            <div class="policy_modal_form">
                <div class="label-cbx ">
                    <input type="radio" checked class="invisible">
                    <div class="checkbox">
                        <svg width="20px" height="20px" viewBox="0 0 20 20">
                            <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                            <polyline points="4 11 8 15 16 6"></polyline>
                        </svg>
                    </div>
                    <div>Я соглашаюсь на обработку <a href="">персональных данных</a></div>
                </div>
            </div>
            <div class="box_title_photo_modal_form">
                <div class="title_box_modal_form">Наши менеджеры свяжутся с вами в течение 15 минут</div>
                <div class="photo_box_modal_form"
                     style="background: url(/img/main/mask_78.png)no-repeat center;"></div>
            </div>
        </form>
    </div>
</section>
<section class="modal_form" id="info_modal">
    <div class="modal_form__wrap">
        <form class="content_modal_form">
            <div class="box_close_btn_modal_form">
                <button type="button" class="close_modal_form btn-reset active" onclick="CloseModal('info_modal')">
                    <svg width="24" height="24" class="burger-close">
                        <use xlink:href="./img/sprite.svg#burger-close"></use>
                    </svg>
                </button>
            </div>
            <div class="title_modal_form">Оставьте заявку на просмотр</div>
            <div class="text_modal_form">
                Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника
                Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов
                недвижимости с Клиентами.
                Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника
                Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов
                недвижимости с Клиентами.
                Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника
                Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов
                недвижимости с Клиентами.
                Компания Дорогой недвижимости «Кулиговская и Партнеры» открывает конкурс на позицию Помощника
                Брокера по элитной недвижимости. Основной функционал - организация и проведение просмотров объектов
                недвижимости с Клиентами.

            </div>
        </form>
    </div>
</section>
<section class="modal_form" id="sank_ask">
    <div class="modal_form__wrap">
        <form class="content_modal_form">
            <div class="box_close_btn_modal_form">
                <button type="button" class="close_modal_form btn-reset active" onclick="CloseModal('sank_ask')">
                    <svg width="24" height="24" class="burger-close">
                        <use xlink:href="./img/sprite.svg#burger-close"></use>
                    </svg>
                </button>
            </div>
            <div class="title_modal_form">Спасибо за заявку!</div>
            <div class="mini_text_modal_form">Наш менеджер перезвонит вам в течение 15 минут</div>

            <div class="btn_close_form" onclick="CloseModal('sank_ask')">Закрыть</div>
        </form>
    </div>
</section>
<section class="modal_form" id="sank_review">
    <div class="modal_form__wrap">
        <form class="content_modal_form">
            <div class="box_close_btn_modal_form">
                <button type="button" class="close_modal_form btn-reset active" onclick="CloseModal('sank_review')">
                    <svg width="24" height="24" class="burger-close">
                        <use xlink:href="./img/sprite.svg#burger-close"></use>
                    </svg>
                </button>
            </div>
            <div class="title_modal_form">Спасибо за оставленный отзыв!</div>
            <div class="mini_text_modal_form">Большое спасибо, за оставленный вами отзыв.</div>

            <div class="btn_close_form" onclick="CloseModal('sank_review')">Закрыть</div>
        </form>
    </div>
</section>
</div>
<script src="./js/libs/jquery.min.js"></script>
<script src="./js/vendor.js"></script>
<script src="./js/main.js"></script>
</body>

</html>