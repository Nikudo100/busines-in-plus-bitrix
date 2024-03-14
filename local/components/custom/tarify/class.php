<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Iblock\ElementTable;
use Bitrix\Iblock\PropertyTable;
use Bitrix\Iblock\ElementPropertyTable;

class CustomElementComponentTarify extends CBitrixComponent
{
    public function executeComponent()
    {
        CModule::IncludeModule('iblock');
        $this->arResult = array(); // Инициализируем массив для результатов

        // Получаем параметр компонента - ID инфоблока
        $iblockId = $this->arParams['IBLOCK_ID'];

        // Получаем все элементы инфоблока
        $elements = ElementTable::getList([
            'filter' => ['IBLOCK_ID' => $iblockId],
            'select' => ['ID', 'NAME','DATE_CREATE','PREVIEW_TEXT']
        ])->fetchAll();
        // dd($elements);
        // Массив для хранения элементов инфоблока с их свойствами
        $elementsWithProperties = [];

        foreach ($elements as $element) {
            $elementProperties = $this->getElementProperties($iblockId, $element['ID']);
            $elementsWithProperties[] = [
                'ID' => $element['ID'],
                'NAME' => $element['NAME'],
                'DATE_CREATE' => $element['DATE_CREATE'],
                'PREVIEW_TEXT' => $element['PREVIEW_TEXT'],
                'PRICE' => isset($elementProperties['PRICE']) ? $elementProperties['PRICE'] : null,
                'PERIOD' => isset($elementProperties['PERIOD']) ? $elementProperties['PERIOD'] : null,
                'DESC' => isset($elementProperties['DESC']) ? unserialize($elementProperties['DESC']) : null,
                'HREF' => isset($elementProperties['HREF']) ? $elementProperties['HREF'] : null,
                'BUT' => isset($elementProperties['BUT']) ? $elementProperties['BUT'] : null,
            ];
        }

        $this->arResult['ELEMENTS'] = $elementsWithProperties;

        // Подключаем шаблон компонента
        $this->includeComponentTemplate();
    }

    // Метод для получения свойств элемента инфоблока
    private function getElementProperties($iblockId, $elementId)
    {
        $elementProperties = [];

        $propertyCodes = ['PRICE', 'PERIOD', 'DESC', 'HREF','BUT'];

        $propertyRes = PropertyTable::getList([
            'filter' => [
                'IBLOCK_ID' => $iblockId,
                'CODE' => $propertyCodes
            ]
        ]);

        while ($property = $propertyRes->fetch()) {
            $propertyId = $property['ID'];

            $propertyValues = ElementPropertyTable::getList([
                'filter' => [
                    'IBLOCK_PROPERTY_ID' => $propertyId,
                    'IBLOCK_ELEMENT_ID' => $elementId
                ]
            ])->fetchAll();

            if (!empty($propertyValues)) {
                $elementProperties[$property['CODE']] = $propertyValues[0]['VALUE'];
            }
        }

        return $elementProperties;
    }
}
?>
