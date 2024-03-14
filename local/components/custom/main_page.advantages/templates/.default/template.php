<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult['ELEMENT'])) {
    $element = $arResult['ELEMENT'];
?>
    <div class="container">
        <div class="advantages d-flex justify-content-md-between">
            <div class="advantages-img d-flex flex-column justify-content-center">
               <? if(!empty($element['PREVIEW_PICTURE'])): ?>
                    <img src="<?=CFile::GetPath($element['PREVIEW_PICTURE'])?>" alt="">
                <? else: ?>
                    <img src="<?= S_T_P ?>/assets/img/courses-01-270x289.jpg.jpg" alt="">
                <? endif ?>
                <div class="advantages-img-text text-center">
                    <span>Узнайте, подходит ли Вам система</span>
                    <a href="https://quizgo.ru/" target="__blank"><button><?= $element['DETAIL_TEXT'] ?></button></a>
                </div>
            </div>
            <div class="advantages-text">
                <div class="advantages-text-title"><?= htmlspecialchars_decode($element['NAME']) ?></div>
                <div class="advantages-text-sub"><?= $element['PREVIEW_TEXT'] ?></div>
                <div class="advantages-text-blocks">
                    <? foreach ($arResult['STIKERS'] as $key => $value) { ?>
                        <? if ($key == 3) : break; endif ?>
                        <? if (!empty($value)) : ?>
                            <div class="advantages-text-blocks-b"><?= $value ?></div>
                        <? endif ?>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>