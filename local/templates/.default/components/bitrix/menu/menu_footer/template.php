<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

if (empty($arResult["ALL_ITEMS"]))
    return;

$menuBlockId = "catalog_menu_".$this->randString();
?>
<div class="bx-top-nav">
    <nav class="bx-top-nav-container" id="<?=$menuBlockId?>">
        <ul class="bx-nav-list-1-lvl">
            <?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>
                <li>
                    <a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>">
                        <?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>
                    </a>
                </li>
            <?endforeach;?>
        </ul>
        <div style="clear: both;"></div>
    </nav>
</div>
