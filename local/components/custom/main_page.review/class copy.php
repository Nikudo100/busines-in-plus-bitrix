<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;
use Bitrix\Iblock\PropertyTable;
use Bitrix\Iblock\ElementPropertyTable;

class CustomElementComponentReview extends CBitrixComponent
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
        // $elementId = 21;

        // Получаем данные элемента
        $res = ElementTable::getList([
            'filter' => [
                'IBLOCK_ID' => $iblockId,
       
            ],
            'select' => ['ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT', 'PREVIEW_PICTURE']
        ]);

        if ($element = $res->fetch()) {
            $this->arResult['ELEMENT'] = $element; // Помещаем данные элемента в результат компонента

            $elementId = $element['ID'];

            // Получаем значения свойств "OPPORT" и "OPPORT_TEXT"
            $opportunities = array();
            $opportRes = PropertyTable::getList(array(
                'filter' => array(
                    'IBLOCK_ID' => $iblockId,
                    'CODE' => array('SHOW_IN_MAIN')
                )
            ));
            while ($opport = $opportRes->fetch()) {
                $opportId = $opport['ID'];
                $opportValues = ElementPropertyTable::getList(array(
                    'filter' => array(
                        'IBLOCK_PROPERTY_ID' => $opportId,
                        'IBLOCK_ELEMENT_ID' => $elementId
                    )
                ));
                while ($opportValue = $opportValues->fetch()) {
                    $opportunities[$opport['CODE']][] = $opportValue['VALUE'];
                }
            }

            $this->arResult['SHOW_IN_MAIN'] = $opportunities;

            // dd($this->arResult['SHOW_IN_MAIN']['SHOW_IN_MAIN'][0]);
            $this->includeComponentTemplate();
        } else {
            ShowError('Элемент не найден');
        }
    }
}
?>
