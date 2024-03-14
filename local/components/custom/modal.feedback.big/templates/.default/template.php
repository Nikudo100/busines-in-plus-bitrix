<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="modal-modal-feedback-breef hidden" id="modal-modal-feedback-breef">
	<form action="<?= POST_FORM_ACTION_URI ?>" class="modal-modal-feedback-form" method="POST">
		<?= bitrix_sessid_post() ?>
		<div class="advantages-text-title">Заполнить <span>бриф</span></div>
		<input class="modal-modal-input" require placeholder="ФИО *" type="text" name="user_last_name" value="<?= $arResult["AUTHOR_LAST_NAME"] ?>">
		<input class="modal-modal-input" require placeholder="Телефон *" type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>">
		<input class="modal-modal-input" require placeholder="E-mail *" type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>">
		<input class="modal-modal-input" require placeholder="Компания *" type="text" name="user_company" value="<?= $arResult["AUTHOR_COMPANY"] ?>">
		<input class="modal-modal-input" require placeholder="Город *" type="text" name="user_city" value="<?= $arResult["AUTHOR_CITY"] ?>">
		<input class="modal-modal-input" require placeholder="Вид деятельности *" type="text" name="user_activity" value="<?= $arResult["AUTHOR_ACTIVITY"] ?>">
		<input class="modal-modal-input" require placeholder="Средний чек *" type="text" name="user_chek" value="">
		<input class="modal-modal-input" require placeholder="Среднемесячный оборот *" type="text" name="user_turnover" value="">
		<input class="modal-modal-input" require placeholder="Количество сотрудников *" type="text" name="user_employees" value="">
		<div class="be-form-chek-modal">
			<img src="/local/templates/busines-in-plus/assets/img/contacts/Group 2.svg" alt="">
			<span>Я выражаю согласие с <a href="">Политикой конфиденциальности</a></span>
		</div>
		<? if (!empty($arResult["ERROR_MESSAGE"])) : ?>
			<? foreach ($arResult["ERROR_MESSAGE"] as $v) : ?>
				<div class="alert alert-danger"><?= $v ?></div>
			<? endforeach; ?>
		<? endif; ?>
		
		<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
		<input class="be-form-button" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
	</form>
</div>
<? if ($arResult["OK_MESSAGE"] <> '') : ?>
	<div class="modal-alert-success">
		<div class="alert alert-success"><?= $arResult["OK_MESSAGE"] ?></div>
	</div>
	<script>
		var successMessage = $(".modal-alert-success");
		// Показываем модальное окно после успешной отправки формы
		$("#modal-modal-feedback-breef").addClass("hidden");
		$(".modal-wrapper").addClass("hidden");
		// Устанавливаем таймер для автоматического скрытия алерта через 3 секунды
		setTimeout(function() {
			successMessage.fadeOut("slow");
		}, 10000);
	</script>
<? endif; ?>