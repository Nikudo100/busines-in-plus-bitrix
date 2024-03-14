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
$this->setFrameMode(true);
?>
<!-- <div class="container d-flex"> -->

<div class="news-list-obch">
	<div class="news-list-obuch-title">Последние обновления</div>
	<ul>
	<? foreach ($arResult["ITEMS"] as $arItem) : ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<li class="news-item-obuch" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<? foreach ($arItem["FIELDS"] as $code => $value) :
				$date = new DateTime($value)
				?>
				
			<? endforeach; ?>
			<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><span class="obuch-date"><?= $date->format('d.m.y'); ?></span> <? echo $arItem["NAME"] ?></a>
		</li>
	<? endforeach; ?>
	</ul>
	<button>Задать свой вопрос</button>
</div>
<!-- 
</div> -->