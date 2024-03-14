<form class="footer-form" method="post" action="<?= POST_FORM_ACTION_URI ?>" enctype="multipart/form-data">
	<div class="footer-form-title">Присоединяйтесь к нашей команде</div>
	<? if (!empty($arResult["ERROR_MESSAGE"])) : ?>
		<? foreach ($arResult["ERROR_MESSAGE"] as $errorMessage) : ?>
			<div class="error-message"><?= $errorMessage ?></div>
		<? endforeach; ?>
	<? endif; ?>
	<? if (!empty($arResult["OK_MESSAGE"])) : ?>
		<div class="success-message"><?= $arResult["OK_MESSAGE"] ?></div>
	<? endif; ?>
	<input class="footer-form-name" placeholder="Имя" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
	<div class="footer-form-file">
		<span>Приложить резюме</span>
		<button class="footer-form-file-but">Выбрать файл</button>
		<input class="footer-form-file-input hidden" type="file" name="user_file" accept=".pdf, .doc, .docx">
	</div>
	<? if ($arParams["USE_CAPTCHA"] == "Y") : ?>
		<input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40" alt="CAPTCHA">
		<input class="captcha_input" type="text" name="captcha_word" size="30" maxlength="50" value="">
	<? endif; ?>
	<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
	<input class="footer-form-submit" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
	<?= bitrix_sessid_post() ?>
</form>