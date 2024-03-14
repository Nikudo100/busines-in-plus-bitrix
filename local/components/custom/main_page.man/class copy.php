<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;

class CustomElementComponentMan extends CBitrixComponent
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
            'select' => ['ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT','PREVIEW_PICTURE','DESCRIPTION']
        ]);

        if ($element = $res->fetch()) {
            $this->arResult['ELEMENT'] = $element; // Помещаем данные элемента в результат компонента
            $this->includeComponentTemplate();
        } else {
            ShowError('Элемент не найден');
        }
    }
}
