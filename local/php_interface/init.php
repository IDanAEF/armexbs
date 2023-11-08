<?php
    function translit_sef($value) {
        $converter = array(
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
        );
    
        $value = mb_strtolower($value);
        $value = strtr($value, $converter);
        $value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
        $value = mb_ereg_replace('[-]+', '-', $value);
        $value = trim($value, '-');	
    
        return $value;
    }

    AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("LetterCodes", "OnAfterIBlockElementAddHandler"));
    AddEventHandler("iblock", "OnAfterIBlockSectionAdd", Array("LetterCodes", "OnAfterIBlockSectionAddHandler"));
    class LetterCodes {
        public static function OnAfterIBlockSectionAddHandler(&$arFields) {
            if ($arFields['IBLOCK_ID'] == 48 && !$arFields['CODE']) {
                $bs = new CIBlockSection;
                $pars = ["CODE" => translit_sef($arFields['NAME'])];
                $res = $bs->Update($arFields['ID'], $pars);
            }
        }
        public static function OnAfterIBlockElementAddHandler(&$arFields) {
            if ($arFields['IBLOCK_ID'] == 49 && !$arFields['CODE']) {
                $bs = new CIBlockElement;
                $pars = ["CODE" => translit_sef($arFields['NAME'])];
                $res = $bs->Update($arFields['ID'], $pars);
            }
        }
    }
?>