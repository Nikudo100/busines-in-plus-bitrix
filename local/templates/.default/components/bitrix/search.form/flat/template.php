<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); ?>
<div class="search-form">
	<form action="<?= $arResult["FORM_ACTION"] ?>">
		<input placeholder="Я ищу" class="inp" type="text" name="q" value="" size="15" maxlength="50" />
		<input class="sub" name="s" type="submit" value="Найти" />
	</form>
</div>