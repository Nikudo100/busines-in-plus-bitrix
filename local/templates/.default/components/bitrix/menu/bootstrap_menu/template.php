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

if (empty($arResult["ALL_ITEMS"]))
    return;

?>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($arResult["MENU_STRUCTURE"] as $itemID => $arColumns) : ?>
                    <?php
                    $existSubmenu = is_array($arColumns) && !empty($arColumns);
                    $class = $existSubmenu ? "nav-item dropdown" : "nav-item";
                    if ($arResult["ALL_ITEMS"][$itemID]["SELECTED"]) {
                        $class .= " active";
                    }
                    ?>
                    <li class="<?= $class ?>">
                        <a class="nav-link<?= $existSubmenu ? ' dropdown-toggle' : '' ?>" href="<?= $arResult["ALL_ITEMS"][$itemID]["LINK"] ?>" <?// $existSubmenu ? ' data-bs-toggle="dropdown" aria-expanded="false"' : '' ?>>
                            <?= htmlspecialcharsbx($arResult["ALL_ITEMS"][$itemID]["TEXT"], ENT_COMPAT, false) ?>
                        </a>
                        <?php if ($existSubmenu) : ?>
                            <ul class="dropdown-menu">
                                <?php foreach ($arColumns as $arRow) : ?>
                                    <?php foreach ($arRow as $itemIdLevel_2 => $arLevel_3) : ?>
                                        <li><a class="dropdown-item" href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"] ?>"><?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"] ?></a></li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>