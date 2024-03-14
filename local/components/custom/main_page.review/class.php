<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\Entity;
use Bitrix\Main\SystemException;

class CustomElementComponentReview extends CBitrixComponent
{
    public function executeComponent()
    {
        // Проверяем загрузку модуля инфоблоков
        if (!Loader::includeModule('iblock')) {
            ShowError('Модуль инфоблоков не установлен');
            return;
        }
        $iblockId = $this->arParams['IBLOCK_ID'];
        $arSelect = array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL", "PREVIEW_TEXT","DETAIL_PAGE_URL");
        // Формируем фильтр для запроса
        $arFilter = array("IBLOCK_ID" => $iblockId, "ACTIVE" => "Y");

        // Выполняем запрос к базе данных
        $res = \CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, false, false, $arSelect);
        $elements = [];
        while ($ar_fields = $res->GetNext()) {
            $img_path = CFile::GetPath($ar_fields["PREVIEW_PICTURE"]);
            $ar_fields['PREVIEW_PICTURE'] = $img_path;
            $elementId = $ar_fields['ID'];
            /*Вместо IBLOCK_ID, впишите id инфоблока, вместо ELEMENT_ID впишите id элемента 'ROW_COUNT' */
            $db_props = CIBlockElement::GetProperty($iblockId, $elementId, "sort", "asc", array());
            /*Перечисляем все его свойства*/
            while ($ar_props = $db_props->GetNext()) {
                if ($ar_props['VALUE']) {
                    $elements[] = $ar_fields;
                }
            }
        }

        // Передаем данные в шаблон компонента
        $this->arResult['ELEMENTS'] = $elements;
        // Подключаем шаблон компонента
        $this->includeComponentTemplate();
    }
}
