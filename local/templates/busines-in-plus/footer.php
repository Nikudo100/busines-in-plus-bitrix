</main>
<div class="map">
  <div id="map"></div>
  <div class="container">
    <? $APPLICATION->IncludeComponent(
      "custom:kontakty",
      "map_window",
      array(
        "IBLOCK_ID" => 15,
        "ELEMENT_ID" => 26
      )
    )
    ?>
  </div>
</div>



<div class="modal-wrapper hidden" id="modal-wrapper"></div>
<!-- <div class="modal-modal-feedback hidden" id="modal-modal-feedback">
  <form action="" class="modal-modal-feedback-form">
    <div class="modal-modal-feedback-title">Обратная связь</div>
    <input class="modal-modal-input" placeholder="ФИО *" type="text" name="user_last_name" value="">
    <input class="modal-modal-input" placeholder="Телефон *" type="text" name="user_last_name" value="">
    <textarea class="modal-modal-comment" name="MESSAGE" placeholder="Комментарий" rows="5" cols="40"></textarea>
    <div class="be-form-chek-modal">
      <img src="/local/templates/busines-in-plus/assets/img/contacts/Group 2.svg" alt="">
      <span>Я выражаю согласие с <a href="">Политикой конфиденциальности</a></span>
    </div>
    <input class="find-out-form-submit" type="submit" name="submit" value="Отправить">
  </form>
</div> -->  
<?$APPLICATION->IncludeComponent(
	"custom:main.feedback",
	"modal",
	Array(
		"AJAX_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "main",
		"EMAIL_TO" => "kunachillo@gmail.com",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",),
		"SUB_TEXT" => "Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель, вставляемый в макет страницы).",
		"TITLE_TEXT" => "Чтобы узнать стоимость системы, <span>оставьте заявку:</span>",
		"USE_CAPTCHA" => "N"
	)
);?>
<!-- <div class="modal-modal-feedback-breef hidden" id="modal-modal-feedback-breef">
  <form action="" class="modal-modal-feedback-form">
    <div class="advantages-text-title">Заполнить <span>бриф</span></div>
    <input class="modal-modal-input" placeholder="ФИО *" type="text" name="user_last_name" value="">
    <input class="modal-modal-input" placeholder="Телефон *" type="text" name="user_phone" value="">
    <input class="modal-modal-input" placeholder="E-mail *" type="text" name="user_email" value="">
    <input class="modal-modal-input" placeholder="Компания *" type="text" name="user_company" value="">
    <input class="modal-modal-input" placeholder="Город *" type="text" name="user_city" value="">
    <input class="modal-modal-input" placeholder="Вид деятельности *" type="text" name="user_activity" value="">
    <input class="modal-modal-input" placeholder="Средний чек *" type="text" name="user_chek" value="">
    <input class="modal-modal-input" placeholder="Среднемесячный оборот *" type="text" name="user_turnover" value="">
    <input class="modal-modal-input" placeholder="Количество сотрудников *" type="text" name="user_employees" value="">
    <div class="be-form-chek-modal">
      <img src="/local/templates/busines-in-plus/assets/img/contacts/Group 2.svg" alt="">
      <span>Я выражаю согласие с <a href="">Политикой конфиденциальности</a></span>
    </div>
    <input type="hidden" name="PARAMS_HASH" value="aed37473cb716f968ab2d0a7fa3f4004">
    <input class="be-form-button" type="submit" name="submit" value="Отправить">
  </form>
</div> -->
<?$APPLICATION->IncludeComponent(
	"custom:modal.feedback.big",
	"",
	Array(
		"AJAX_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "",
		"EMAIL_TO" => "kunachillo@gmail.com",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",),
		"USE_CAPTCHA" => "N"
	)
);?>


<footer>
  <div class="container">
    <div class="footer">
      <div class="footer-contact">
        <a href="/"><img class="footer-contact-img" src="<?= S_T_P ?>/assets/img/Group 18.svg" alt=""></a>
        <p class="footer-contact-text">Узнавайте больше о компании на Youtube</p>
        <div class="footer-contact-icons">
          <a href="#" class="footer-contact-icons-i">
            <img src="<?= S_T_P ?>/assets/img/Frame-1.svg" alt="">
          </a>
          <a href="#" class="footer-contact-icons-i">
            <img src="<?= S_T_P ?>/assets/img/Frame.svg" alt="">
          </a>
          <a href="#" class="footer-contact-icons-i">
            <img src="<?= S_T_P ?>/assets/img/phone-icon.svg" alt="">
          </a>
        </div>
        <button class="download-brif">Скачать бриф</button>
      </div>
      <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "menu_footer",
        array(
          "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
          "CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней
          "DELAY" => "N",  // Откладывать выполнение шаблона меню
          "MAX_LEVEL" => "2",  // Уровень вложенности меню
          "MENU_CACHE_GET_VARS" => "",  // Значимые переменные запроса
          "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
          "MENU_CACHE_TYPE" => "N",  // Тип кеширования
          "MENU_CACHE_USE_GROUPS" => "Y",  // Учитывать права доступа
          "USE_EXT" => "N",  // Подключать файлы с именами вида .тип_меню.menu_ext.php
          "COMPONENT_TEMPLATE" => "catalog_horizontal",
          "MENU_THEME" => "site",  // Тема меню
          "ROOT_MENU_TYPE" => "bottom",  // Тип меню для первого уровня
        ),
        false
      ); ?>
      <!-- <form class="footer-form" action="">
        <div class="footer-form-title">Присоединяйтесь к нашей команде</div>
        <input class="footer-form-name" placeholder="Имя" type="text">
        <div class="footer-form-file">
          <span>Приложить резюме</span>
          <button class="footer-form-file-but">Выбрать файл</button>
        </div>
        <button class="footer-form-submit" type="submit">Отправить</button>
      </form> -->
      <div class="footer-form">
        <? $APPLICATION->IncludeComponent(
          "custom:footer.feedback",
          "",
          array(
            "AJAX_MODE" => "Y",
            "EMAIL_TO" => "kunachillo@gmail.com",
            "EVENT_MESSAGE_ID" => array(),
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "REQUIRED_FIELDS" => array(),
            "USE_CAPTCHA" => "N"
          )
        ); ?>
      </div>
    </div>
    <div class="basement">
      <span>Все права защищены, 2024 г.</span>
      <a href="#">Политика конфиденциальности сайта</a>
    </div>
  </div>
</footer>
<script type="text/javascript">
  ymaps.ready(function() {
    var myMap1 = new ymaps.Map('map', {
      center: [45.049405, 38.971989],
      zoom: 14,
      controls: [],
      behaviors: ['disableScrollZoom', 'drag', 'multiTouch']
    }, {
      searchControlProvider: false,
      balloonPanelMaxMapArea: 0
    });
    myPlacemark = new ymaps.Placemark([45.049405, 38.971989], {
      hasBalloon: false,

    }, {
      preset: "islands#nightCircleDotIcon"
    })
    myMap1.behaviors.disable('drag')
    myMap1.geoObjects.add(myPlacemark);
  });
</script>
<script type="module">
  import {
    Fancybox
  } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.esm.js";

  Fancybox.bind('[data-fancybox="gallery"]', {
    closeButton: true
  });
</script>
<script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

  if (document.querySelector('.what-say__slider') !== null) {
    var newsSlider = new Swiper('.what-say__slider', {
      observer: true,
      observeParents: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      // Navigation arrows
      navigation: {
        prevEl: '.news .slider-nav--prev',
        nextEl: '.news .slider-nav--next'
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        // when window width is >= 480px
        576: {
          slidesPerView: 2,
          spaceBetween: 15
        },
        // when window width is >= 640px
        // 767.98: {
        // 	slidesPerView: 5,
        // 	spaceBetween: 16
        // },
        959.98: {
          slidesPerView: 2,
          spaceBetween: 30
        }
      }
    });
  }
  if (document.querySelector('.pos-rel .swiper-container') !== null) {
  var swiper = new Swiper('.pos-rel .swiper-container', {
    slidesPerView: 4,
    spaceBetween: 15,
    loop: true,
    navigation: {
      nextEl: '.pos-rel .swiper-button-next',
      prevEl: '.pos-rel .swiper-button-prev',
    },
  });
}
</script>
</body>

</html>