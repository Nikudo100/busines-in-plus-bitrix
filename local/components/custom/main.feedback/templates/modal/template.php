<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="modal-modal-feedback hidden" id="modal-modal-feedback">
    <form action="<?= POST_FORM_ACTION_URI ?>" class="modal-modal-feedback-form" method="POST">
        <?= bitrix_sessid_post() ?>
        <div class="modal-modal-feedback-title"><?= htmlspecialchars_decode($arParams['TITLE_TEXT']) ?></div>
        <input class="modal-modal-input" placeholder="ФИО *" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
        <input class="modal-modal-input" placeholder="Телефон *" type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>">
        <textarea class="modal-modal-comment" name="MESSAGE" placeholder="Комментарий" rows="5" cols="40"><?= $arResult["MESSAGE"] ?></textarea>
        <? if (!empty($arResult["ERROR_MESSAGE"])) : ?>
            <? foreach ($arResult["ERROR_MESSAGE"] as $v) : ?>
                <div class="alert alert-danger"><?= $v ?></div>
            <? endforeach; ?>
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
        <div class="be-form-chek-modal">
            <img src="/local/templates/busines-in-plus/assets/img/contacts/Group 2.svg" alt="">
            <span>Я выражаю согласие с <a href="">Политикой конфиденциальности</a></span>
        </div>
        <input class="find-out-form-submit" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
    </form>
</div>

<? if ($arResult["OK_MESSAGE"] <> '') : ?>
	<div class="modal-alert-success">
		<div class="alert alert-success"><?= $arResult["OK_MESSAGE"] ?></div>
	</div>
	<script>
		var successMessage = $(".modal-alert-success");
		// Показываем модальное окно после успешной отправки формы
		$("#modal-modal-feedback").addClass("hidden");
		$(".modal-wrapper").addClass("hidden");
		// Устанавливаем таймер для автоматического скрытия алерта через 3 секунды
		setTimeout(function() {
			successMessage.fadeOut("slow");
		}, 10000);
	</script>
<? endif; ?>