<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;
use Bitrix\Iblock\ElementPropertyTable;

class CustomElementComponentMan extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->arResult = array(); // Initialize array for results

        // Check if the iblock module is loaded
        if (!Loader::includeModule('iblock')) {
            ShowError('Модуль инфоблоков не установлен');
            return;
        }

        // Get component parameters
        $iblockId = $this->arParams['IBLOCK_ID'];
        $elementId = $this->arParams['ELEMENT_ID'];

        // Get element data
        $res = ElementTable::getList([  
            'filter' => [
                'IBLOCK_ID' => $iblockId,
                'ID' => $elementId
            ],
            // 'select' => ['ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT','PREVIEW_PICTURE']
        ]);

        if ($element = $res->fetch()) {
            // Get the alt text from the element properties
            $altText = '';
            $propertyRes = ElementPropertyTable::getList([
                'filter' => [
                    'IBLOCK_ELEMENT_ID' => $elementId,
                ],
                'select' => ['VALUE']
            ]);
            if ($property = $propertyRes->fetch()) {
                $altText = $property['VALUE'];
            }

            // Pass alt text to template
            $this->arResult['ALT_TEXT'] = $altText;

            $this->arResult['ELEMENT'] = $element; // Place element data in component result
            $this->includeComponentTemplate();
        } else {
            ShowError('Элемент не найден');
        }
    }
}
