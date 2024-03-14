<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult['ELEMENT'])) {
    $element = $arResult['ELEMENT'];
?>
    <div class="opport-row-text-sub">
        <?= $element['DETAIL_TEXT'] ?>
    </div>
    <div class="opport-row">
        <div class="opport-row-img ord-2">
            <?php
            // Get the file extension of the preview picture
            $F = CFile::GetFileArray($element['PREVIEW_PICTURE']);
            $altText = $F['DESCRIPTION'];
            $isVideo = preg_match('/\b(mp4|mov|avi)\b/i', $altText);

            if ($isVideo) :
            ?>
                <a class="client-text-row-img slide-video" data-fancybox="gallery" href="<?= $altText ?>">
                    <video class="rounded" rounded>
                        <source src="<?= $altText ?>" type="video/mp4">
                    </video>
                </a>
            <?php else : ?>
                <img src="<?= $F['SRC'] ?>" alt="<?=$altText?>">
            <?php endif ?>
        </div>
        <div class="opport-row-text">
            <div class="opport-row-text-title"><?= htmlspecialchars_decode($element['NAME']) ?></div>
            <div class="opport-row-text-sub">
                <?= $element['PREVIEW_TEXT'] ?>
            </div>
            <button class="opport-row-text-but">Узнать подробнее</button>
        </div>
    </div>
<?php
}
?>