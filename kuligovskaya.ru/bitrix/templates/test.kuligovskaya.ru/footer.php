<footer class="footer">
    <div class="wrap">
        <div class="footer__search-mob">
            <input type="text" class="input" placeholder="Поиск">
        </div>
        <div class="footer__top">
            <div class="header__wrap">
                <a href="/" class="logo">
                    <img src="/bitrix/templates/test.kuligovskaya.ru/img/main/logo.svg">
                </a>
                <div class="header__des">
                    <div class="header__row">
                        <div class="footer__top__wrap">
                            <nav class="top-nav">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "header_menu",
                                    array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "left",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "left",
                                        "USE_EXT" => "N",
                                        "COMPONENT_TEMPLATE" => "header_menu"
                                    ),
                                    false
                                );?>
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
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/main/location.png">
                                </div>
                                <div class="header__location__text">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        ".default",
                                        array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/bitrix/templates/test.kuligovskaya.ru/include/location.php",
                                            "EDIT_TEMPLATE" => ""
                                        ),
                                        false
                                    ); ?>
                                </div>
                            </a>
                            <div class="header__mid__right">
                                <? $APPLICATION->IncludeComponent("bitrix:news.list", "social_networks", Array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                                    "AJAX_MODE" => "N",	// Включить режим AJAX
                                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                    "CACHE_TYPE" => "A",	// Тип кеширования
                                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                                    "COMPONENT_TEMPLATE" => "social_networks",
                                    "DETAIL_URL" => "/news/detail?ID=#ELEMENT_ID#",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                                    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                                    "DISPLAY_NAME" => "Y",	// Выводить название элемента
                                    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                                    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                    "FIELD_CODE" => array(	// Поля
                                        0 => "DETAIL_PICTURE",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",	// Фильтр
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                    "IBLOCK_ID" => "48",	// Код информационного блока
                                    "IBLOCK_TYPE" => "smscity_realty_content",	// Тип информационного блока (используется только для проверки)
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                                    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                                    "PAGER_TITLE" => "Новости",	// Название категорий
                                    "PARENT_SECTION" => "",	// ID раздела
                                    "PARENT_SECTION_CODE" => "",	// Код раздела
                                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                                    "PROPERTY_CODE" => array(	// Свойства
                                        0 => "",
                                        1 => "SMALL_HEADER",
                                        2 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                                    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                                    "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                                    "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                                    "SET_STATUS_404" => "N",	// Устанавливать статус 404
                                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                                    "SHOW_404" => "N",	// Показ специальной страницы
                                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                                    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                                ),
                                    false
                                ); ?>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/bitrix/templates/test.kuligovskaya.ru/include/phone.php",
                                        "EDIT_TEMPLATE" => ""
                                    ),
                                    false
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__mob">
                    <a href="" class="header__mob__phone">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.11539 6.83838V8.21338C9.1159 8.34102 9.08976 8.46737 9.03862 8.58433C8.98748 8.70128 8.91248 8.80627 8.81842 8.89256C8.72436 8.97886 8.61332 9.04456 8.4924 9.08545C8.37148 9.12634 8.24335 9.14153 8.11622 9.13004C6.70585 8.9768 5.35109 8.49486 4.1608 7.72296C3.05339 7.01926 2.1145 6.08037 1.4108 4.97296C0.63621 3.77726 0.154165 2.41592 0.00372016 0.999211C-0.00773336 0.872467 0.00732949 0.744726 0.0479495 0.624122C0.0885695 0.503518 0.153857 0.392694 0.239655 0.298704C0.325452 0.204715 0.429881 0.12962 0.546291 0.0782003C0.662701 0.0267811 0.788543 0.000164281 0.915804 4.44365e-05H2.2908C2.51324 -0.00214477 2.72887 0.0766221 2.89753 0.221664C3.06618 0.366705 3.17634 0.568124 3.20747 0.788378C3.26551 1.22841 3.37313 1.66046 3.5283 2.07629C3.58997 2.24034 3.60332 2.41863 3.56676 2.59003C3.53021 2.76143 3.44528 2.91876 3.32205 3.04338L2.73997 3.62546C3.39243 4.77292 4.34251 5.723 5.48997 6.37546L6.07205 5.79338C6.19667 5.67015 6.354 5.58522 6.5254 5.54867C6.6968 5.51212 6.87509 5.52546 7.03914 5.58713C7.45497 5.7423 7.88702 5.84993 8.32705 5.90796C8.5497 5.93937 8.75303 6.05151 8.89838 6.22306C9.04373 6.39461 9.12096 6.6136 9.11539 6.83838Z" fill="white"/>
                        </svg>

                    </a>
                    <button type="button" class="burger btn-reset" id="burger-footer" class="burger-open">
                        <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 0.5H1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19 5.5H1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19 10.5H1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="burger-close">
                            <path d="M18.7279 5.99998L6 18.7279" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.7279 18.7279L6 6" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="footer__bot">
            <div class="footer__bot__item">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/bitrix/templates/test.kuligovskaya.ru/include/name_company.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </div>
            <div class="footer__bot__item">
                Все права защищены
            </div>
            <a href="https://gramor.ru/" class="logo" style="margin-right: 0px;">
                Разработка сайта
                <img src="/bitrix/templates/test.kuligovskaya.ru/img/Group_238.png" alt="gramor">
            </a>
        </div>
    </div>
</footer>
<section class="modal_form" id="ask_questions">
    <div class="modal_form__wrap">
        <form class="content_modal_form" id="askform">
            <div class="box_close_btn_modal_form">
                <button type="button" class="close_modal_form btn-reset active"
                        onclick="CloseModal('ask_questions')">
                    <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7279 5.99998L6 18.7279" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.7279 18.7279L6 6" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                    <input type="text" name="name" placeholder="Ваше имя">
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
                    <input type="text" name="email" placeholder="Ваш E-mail">
                </div>
                <div class="textarea_modal_form">
                    <textarea name="question" id="" cols="30" rows="10" placeholder="Текст вопроса"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-white" data-graph-animation="fadeIn">Оставить заявку</button>
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
            <div class="error-text"></div>
        </form>
        <script type="text/javascript">
            $(document).ready(function() {

                $("#askform").submit(function(){
                    var $that = $(this),
                        formData = new FormData($that.get(0));
                    $.ajax({
                        contentType: false,
                        processData: false,
                        type: "POST",
                        url: "/ajax/ask.php",
                        data: formData,
                        dataType: 'json',
                        success: function(result){
                            if(result.status=='success'){
                                CloseModal('ask_questions');
                                OpenModal('sank_ask');
                            }else{
                                document.querySelector(".error-text").style.textAlign = "center";
                                document.querySelector(".error-text").style.marginTop = "10px";
                                document.querySelector(".error-text").style.color = "#ef5241";
                                document.querySelector('.error-text').textContent = result.mess;
                            }
                        }
                    });
                    return false;
                });
            });

        </script>
    </div>
</section>
<section class="modal_form" id="ask_viewing">
    <div class="modal_form__wrap">
        <form class="content_modal_form" id="requestform">
            <div class="box_close_btn_modal_form">
                <button type="button" class="close_modal_form btn-reset active" onclick="CloseModal('ask_viewing')">
                    <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7279 5.99998L6 18.7279" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.7279 18.7279L6 6" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                    <input type="hidden" id="vakid" name="vakid" value="">
                    <input type="text" name="name" placeholder="Ваше имя">
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
                    <input type="text" name="email" placeholder="Ваш E-mail">
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
                    <input type="text" name="phone" class="phone" placeholder="Ваш номер телефона">
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
                     style="background: url(/bitrix/templates/test.kuligovskaya.ru/img/main/mask_78.png)no-repeat center;"></div>
            </div>
            <div class="error-text"></div>
        </form>
        <script type="text/javascript">
            $(document).ready(function() {

                var a = document.querySelectorAll('.vak-button');
                [].forEach.call( a, function(el) {
                    el.onclick = function(e) {
                        console.log(el.getAttribute('data-vakid'));
                        document.getElementById('vakid').value = el.getAttribute('data-vakid');
                    }
                });

                $("#requestform").submit(function(){

                    var $that = $(this),
                        formData = new FormData($that.get(0));
                    $.ajax({
                        contentType: false,
                        processData: false,
                        type: "POST",
                        url: "/ajax/request.php",
                        data: formData,
                        dataType: 'json',
                        success: function(result){
                            if(result.status=='success'){
                                CloseModal('ask_questions');
                                OpenModal('sank_ask');
                            }else{
                                document.querySelector(".error-text").style.textAlign = "center";
                                document.querySelector(".error-text").style.marginTop = "10px";
                                document.querySelector(".error-text").style.color = "#ef5241";
                                document.querySelector('.error-text').textContent = result.mess;
                            }
                        }
                    });
                    return false;
                });
            });

        </script>
    </div>
</section>
<section class="modal_form" id="info_modal">
    <div class="modal_form__wrap">
        <form class="content_modal_form">
            <div class="box_close_btn_modal_form">
                <button type="button" class="close_modal_form btn-reset active" onclick="CloseModal('info_modal')">
                    <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7279 5.99998L6 18.7279" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.7279 18.7279L6 6" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                    <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7279 5.99998L6 18.7279" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.7279 18.7279L6 6" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </button>
            </div>
            <div class="title_modal_form">Спасибо за заявку!</div>
            <div class="mini_text_modal_form">Наш менеджер перезвонит вам в течение 15 минут</div>

            <div class="btn_close_form" onclick="CloseModal('sank_ask')">Закрыть</div>
        </form>
    </div>
</section>

</div>
<script type="text/javascript">
    $(".phone").mask("+7 (999) 999-99-99");
</script>
</body>

</html>