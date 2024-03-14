<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="container">
    <div class="events">
        <div class="events-title">
            Мероприятия
        </div>
        <div class="d-flex">
            <? foreach ($arResult["ITEMS"] as $arItem) : ?>
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="events-block">
                    <div class="events-block-data">
                        <?= $arItem['ACTIVE_FROM'] ?>
                    </div>
                    <div class="events-block-img">
                    
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]//CFile::GetPath($arItem['PREVIEW_PICTURE']); ?>" alt="">
                    </div>
                    <div class="events-block-text">
                        <div class="events-block-text-title">
                            <?= $arItem['NAME']; ?>
                        </div>
                        <div class="events-block-text-sub">
                            <?= $arItem['PREVIEW_TEXT']; ?>
                        </div>
                    </div>
                </a>
            <? endforeach; ?>
        </div>
        <a href="/o-komnanii/meropriyatiya/" class="events-button">Все мероприятия</a>
    </div>
</div>