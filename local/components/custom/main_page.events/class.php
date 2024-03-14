<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\Entity;

class CTarifyComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if (!Loader::includeModule('iblock')) {
            ShowError('Модуль инфоблоков не установлен');
            return;
        }

        $iblockId = $this->arParams['IBLOCK_ID'];

        $items = $this->getItems($iblockId);

        $this->arResult['ITEMS'] = $items;
        // dd($items);
        $this->includeComponentTemplate();
    }

    private function getItems($iblockId)
    {
        $items = [];

        $select = ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE','DETAIL_PAGE_URL','ACTIVE_FROM'];
        $filter = ['IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y'];
        $order = ['SORT' => 'ASC', 'ID' => 'ASC'];
        $limit = 3;

        $res = \CIBlockElement::GetList(array("SORT" => "ASC"), $filter, false, false, $select);

        while ($item = $res->GetNext()) {
            $items[] = $item;
        }
        return $items;
    }
}
