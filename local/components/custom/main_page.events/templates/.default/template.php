<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult['ITEMS'])) {
    $elements = $arResult['ITEMS'];
?>
    <div class="container">
        <div class="events">
            <div class="events-title">
                Мероприятия
            </div>
            <div class="d-flex">
                <?php foreach ($elements as $item) : ?>
                    <a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="events-block">
                        <div class="events-block-data">
                            <?= $item['ACTIVE_FROM'] ?>
                        </div>
                        <div class="events-block-img">
                            <img src="<?= CFile::GetPath($item['PREVIEW_PICTURE']); ?>" alt="">
                        </div>
                        <div class="events-block-text">
                            <div class="events-block-text-title">
                                <?= $item['NAME']; ?>
                            </div>
                            <div class="events-block-text-sub">
                                <?= $item['PREVIEW_TEXT']; ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            <a href="/o-komnanii/meropriyatiya/" class="events-button">Все мероприятия</a>
        </div>
    </div>

<?php
}
?>