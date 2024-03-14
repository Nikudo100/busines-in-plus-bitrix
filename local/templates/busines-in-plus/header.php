<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
  die();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <?php
  define("S_T_P", SITE_TEMPLATE_PATH);

  use Bitrix\Main\Page\Asset;

  $APPLICATION->ShowHead();
  CJSCore::Init(array("jquery"));
  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0" />');
  Asset::getInstance()->addString('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">');
  Asset::getInstance()->addString('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>');
  Asset::getInstance()->addString('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>');
  Asset::getInstance()->addString('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>');
  Asset::getInstance()->addString('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />');
  Asset::getInstance()->addString('<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>');
  Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>');
  Asset::getInstance()->addJs(S_T_P . '/assets/js/main.js');
  Asset::getInstance()->addCss(S_T_P . '/assets/css/style.css');
  ?>
  <!-- <link rel="icon" type="image/svg+xml" href="/vite.svg" /> -->
  <title><?php $APPLICATION->ShowTitle() ?></title>
</head>

<body>
  <div id="panel"><?php $APPLICATION->ShowPanel() ?></div>
  <? if ($APPLICATION->GetCurPage() == '/') : ?>
    <div class="pos-rel">
      <div class="bg-bree"></div>
    </div>
  <? endif; ?>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
      <div class=" mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="<?= S_T_P ?>/assets/img/Group17.svg" alt="">
        </a>
      </div>
      <!-- <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/vozmozhnosti">Возможности</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Тарифы</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  О компании
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Мероприятия</a></li>
                  <li><a class="dropdown-item" href="#">Наши клиенты</a></li>
                  <li><a class="dropdown-item" href="#">Обучение</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link">Контакты</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> -->
      <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "bootstrap_menu",
        array(
          "ALLOW_MULTI_SELECT" => "N",
          "CHILD_MENU_TYPE" => "left",
          "DELAY" => "N",
          "MAX_LEVEL" => "2",
          "MENU_CACHE_GET_VARS" => array(),
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_TYPE" => "N",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "USE_EXT" => "N",
          "COMPONENT_TEMPLATE" => "bootstrap_menu",
          "MENU_THEME" => "site",
          "ROOT_MENU_TYPE" => "leftfirst"
        ),
        false
      ); ?>

      <div class="header-buttons d-flex  justify-content-md-between ">
        <a href="#" class="nav-link">
          <img src="<?= S_T_P ?>/assets/img/Frame-1.svg" alt="">
        </a>
        <a href="#" class="nav-link">
          <img src="<?= S_T_P  ?>/assets/img/Frame.svg" alt="">
        </a>
        <a href="#" class="nav-link">
          <img src="<?= S_T_P  ?>/assets/img/Group 74.svg" alt="">
        </a>
        <button href="#" class="text-white button-breef but-modal-breef">
          Заполнить бриф
        </button>
        <a href="#"><img src="<?= S_T_P  ?>/assets/img/3729 .svg" alt=""></a>
      </div>
    </header>
  </div>
  <main>