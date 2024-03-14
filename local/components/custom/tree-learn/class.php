<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\SectionTable;
use Bitrix\Iblock\ElementTable;

class MyComponent1 extends CBitrixComponent
{
    public function executeComponent()
    {
        if (!Loader::includeModule('iblock')) {
            ShowError('Модуль инфоблоков не установлен');
            return;
        }

        // Получаем параметры компонента
        $iblockId = $this->arParams['IBLOCK_ID'];

        // Получаем список всех разделов инфоблока
        $arSections = $this->getSections($iblockId);

        // Передаем данные в шаблон компонента
        $this->arResult['SECTIONS'] = $arSections;

        // Выводим шаблон компонента
        $this->includeComponentTemplate();
    }

    protected function getSections($iblockId, $parentSectionId = 0)
    {
        $arSections = array();

        // Получаем список разделов инфоблока
        $rsSections = SectionTable::getList(array(
            'filter' => array(
                'IBLOCK_ID' => $iblockId,
                'SECTION_ID' => $parentSectionId
            ),
            'select' => array('ID', 'NAME', 'DEPTH_LEVEL'),
            'order' => array('SORT' => 'ASC')
        ));
        dd($rsSections);

        while ($section = $rsSections->fetch()) {
            $arSection = array(
                'ID' => $section['ID'],
                'NAME' => $section['NAME'],
                'DEPTH_LEVEL' => $section['DEPTH_LEVEL']
            );

            // Если раздел имеет вложенность, получаем его элементы
            if ($section['DEPTH_LEVEL'] == 2) {
                $arSection['ELEMENTS'] = $this->getSectionElements($iblockId, $section['ID']);
            }

            // Получаем вложенные разделы (рекурсивно)
            $arSection['SECTIONS'] = $this->getSections($iblockId, $section['ID']);

            $arSections[] = $arSection;
        }

        return $arSections;
    }

    protected function getSectionElements($iblockId, $sectionId)
    {
        $arElements = array();

        // Получаем элементы раздела
        $rsElements = ElementTable::getList(array(
            'filter' => array(
                'IBLOCK_ID' => $iblockId,
                'SECTION_ID' => $sectionId
            ),
            'select' => array('ID', 'NAME')
        ));

        while ($element = $rsElements->fetch()) {
            $arElements[] = $element;
        }

        return $arElements;
    }
}
