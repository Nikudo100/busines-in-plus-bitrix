<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if ($arResult["NavPageCount"] > 1) : ?>

    <? if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]) : ?>
        <?
        $plus = $arResult["NavPageNomer"] + 1;
        $url = $arResult["sUrlPathParams"] . "PAGEN_" . $arResult["NavNum"] . "=" . $plus;
        ?>
        
        <button class="load-more-items events-page-button" data-url="<?= $url ?>">ПОКАЗАТЬ ЕЩЕ</button>

    <? endif ?>

<? endif ?>