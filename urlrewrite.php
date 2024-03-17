<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/o-komnanii/meropriyatiya/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/o-komnanii/meropriyatiya/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/o-komnanii/nashi-klienty/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/o-komnanii/nashi-klienty/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/o-komnanii/obuchenie/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/o-komnanii/obuchenie/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
