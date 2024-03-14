<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="container">
    <div class="find-out">
        <div class="d-flex">
            <div class="find-out-text">
                <div class="find-out-text-title">
                    <?= htmlspecialchars_decode($arParams['TITLE_TEXT'])?>
                </div>
                <div class="find-out-text-sub"><?= htmlspecialchars_decode($arParams['SUB_TEXT'])?></div>
            </div>
            <form class="find-out-form" action="<?= POST_FORM_ACTION_URI ?>" method="POST">
                <?= bitrix_sessid_post() ?>
                <div class="find-out-form-row">
                    <input placeholder="Имя" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
                    <input placeholder="Телефон" type="phone" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>">
                </div>
                <textarea class="find-out-form-comment" name="MESSAGE" placeholder="Комментарий" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
                <!-- <input class="find-out-form-comment" placeholder="Комментарий" type="text" name="user_comment"> -->
                <? if (!empty($arResult["ERROR_MESSAGE"])) : ?>
                    <? foreach ($arResult["ERROR_MESSAGE"] as $v) : ?>
                        <div class="alert alert-danger"><?= $v ?></div>
                    <? endforeach; ?>
                <? endif; ?>
                <? if ($arResult["OK_MESSAGE"] <> '') : ?>
                    <div class="alert alert-success"><?= $arResult["OK_MESSAGE"] ?></div>
                <? endif; ?>
                <? if ($arParams["USE_CAPTCHA"] == "Y") : ?>
                    <div class="mf-captcha">
                        <div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
                        <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40" alt="CAPTCHA">
                        <div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span></div>
                        <input type="text" name="captcha_word" size="30" maxlength="50" value="">
                    </div>
                <? endif; ?>
                <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                <input class="find-out-form-submit" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
            </form>
        </div>
    </div>
</div>