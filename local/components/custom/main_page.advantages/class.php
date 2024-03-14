<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;
use Bitrix\Iblock\PropertyTable;

class CustomElementComponent extends CBitrixComponent
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
            'select' => ['ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT','PREVIEW_PICTURE']
        ]);

        if ($element = $res->fetch()) {
            $this->arResult['ELEMENT'] = $element; // Помещаем данные элемента в результат компонента
            
            // Получаем значения свойства "STIKERS"
            $stikers = array();
            $propertyRes = \Bitrix\Iblock\PropertyTable::getList(array(
                'filter' => array(
                    'IBLOCK_ID' => $iblockId,
                    'CODE' => 'STIKERS'
                )
            ));
            if ($property = $propertyRes->fetch()) {
                $propertyId = $property['ID'];
                $propertyValues = \Bitrix\Iblock\ElementPropertyTable::getList(array(
                    'filter' => array(
                        'IBLOCK_PROPERTY_ID' => $propertyId,
                        'IBLOCK_ELEMENT_ID' => $elementId
                    )
                ));
                while ($propertyValue = $propertyValues->fetch()) {
                    $stikers[] = $propertyValue['VALUE'];
                }
            }

            $this->arResult['STIKERS'] = $stikers;

            $this->includeComponentTemplate();
        } else {
            ShowError('Элемент не найден');
        }
    }
}
