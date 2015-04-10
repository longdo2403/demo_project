<?php
class FrontHelper {
    public static function generateCastString($cast_ids, $casts) {
        $arrCast = array();
        $strRet = '';
        foreach ($casts as $key => $item) {
            $arrCast[$item['id']] = $item['name'];
        }
        $arrIn = explode(',', $cast_ids);
        foreach ($arrIn as $value) {
            if (array_key_exists($value, $arrCast)) {
                $strRet .= '<a href="#">' . $arrCast[$value] . '</a>' . ', ';
            }
        }
        return FrontHelper::removeLastChar($strRet);
    }
    
    public static function generateGenresString($genre_ids, $arrGenre, $disp_link = false) {
        $arrRet = array();
        $strRet = '';
        foreach ($arrGenre as $key => $item) {
            $arrRet[$item['id']] = $item['name'];
        }
        $arrIn = explode(',', $genre_ids);
        foreach ($arrIn as $value) {
            if (array_key_exists($value, $arrRet)) {
                if (!$disp_link) {
                    $strRet .= '' . $arrRet[$value] . '' . ', ';
                } else {
                    $strRet .= '<a href="#">' . $arrRet[$value] . '</a>' . ', ';
                }
                
            }
        }
        return FrontHelper::removeLastChar($strRet);
    }
    
    public static function removeLastChar($string) {
        return rtrim($string,', ');
    }
}