<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^\\/catalog\\/(.*)\\/?#',
    'RULE' => 'productCode=$1',
    'ID' => '',
    'PATH' => '/catalog/product.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^\\/cases\\/(.*)\\/?#',
    'RULE' => 'caseCode=$1',
    'ID' => '',
    'PATH' => '/cases/state.php',
    'SORT' => 100,
  ),
);
