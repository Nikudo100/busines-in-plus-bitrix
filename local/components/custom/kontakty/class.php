<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;
use Bitrix\Iblock\PropertyTable;
use Bitrix\Iblock\ElementPropertyTable;

class ContactInfoComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->arResult = array(); // Инициализируем массив для результатов

        // Проверяем загрузку модуля инфоблоков
        if (!Loader::includeModule('iblock')) {
            ShowError('Модуль инфоблоков не установлен');
            return;
        }

        // Получаем параметры компонента
        $iblockId = $this->arParams['IBLOCK_ID'];
        $elementId = $this->arParams['ELEMENT_ID'];

        // Получаем данные элемента
        $res = ElementTable::getList([
            'filter' => [
                'IBLOCK_ID' => $iblockId,
                'ID' => $elementId
            ],
            'select' => ['ID', 'NAME']
        ]);

        if ($element = $res->fetch()) {
            $this->arResult['ELEMENT'] = $element; // Помещаем данные элемента в результат компонента

            // Получаем значения свойств контактной информации
            $contactProperties = $this->getContactProperties($iblockId, $elementId);
            $this->arResult['CONTACT_PROPERTIES'] = $contactProperties;

            $this->includeComponentTemplate();
        } else {
            ShowError('Элемент не найден');
        }
    }

    protected function getContactProperties($iblockId, $elementId)
    {
        $contactProperties = [];

        // Получаем значения свойств контактной информации
        $propertyRes = PropertyTable::getList([
            'filter' => [
                'IBLOCK_ID' => $iblockId,
                'CODE' => ['ADRESS', 'PHONE', 'EMAIL']
            ]
        ]);

        while ($property = $propertyRes->fetch()) {
            $propertyId = $property['ID'];
            $propertyValueRes = ElementPropertyTable::getList([
                'filter' => [
                    'IBLOCK_PROPERTY_ID' => $propertyId,
                    'IBLOCK_ELEMENT_ID' => $elementId
                ]
            ]);

            if ($propertyValue = $propertyValueRes->fetch()) {
                $contactProperties[$property['CODE']] = $propertyValue['VALUE'];
            }
        }

        return $contactProperties;
    }
}
