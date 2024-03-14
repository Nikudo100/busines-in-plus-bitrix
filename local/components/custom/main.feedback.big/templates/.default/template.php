<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="container">
	<div class="find-out">
		<div class="d-flex">
			<div class="find-out-text">
				<div class="find-out-text-title">
					Чтобы узнать стоимость системы, <span>оставьте заявку:</span>
				</div>
				<div class="find-out-text-sub">Текст Lorem ipsum — классический текст-«рыба» (условный, зачастую бессмысленный текст-заполнитель, вставляемый в макет страницы).</div>
			</div>
			<form class="find-out-form" action="<?= POST_FORM_ACTION_URI ?>" method="POST">
				<?= bitrix_sessid_post() ?>
				<div class="find-out-form-row">
					<input placeholder="Имя" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
					<input placeholder="Телефон" type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>">
				</div>
				<input class="find-out-form-comment" placeholder="Комментарий" type="text" name="user_comment">
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