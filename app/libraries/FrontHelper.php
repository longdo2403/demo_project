<?php
class FrontHelper {
    public static function generateCastString($cast_ids, $casts) {
        $arrCast = array();
        $strRet = '';
        foreach ($casts as $key => $item) {
            $arrCast[$item['id']]['name'] = $item['name'];
            $arrCast[$item['id']]['friendly_name'] = $item['friendly_name'];
        }
        $arrIn = explode(',', $cast_ids);
        foreach ($arrIn as $value) {
            if (array_key_exists($value, $arrCast)) {
                $strRet .= '<a href="'. route('index.cast', $arrCast[$value]['friendly_name']) .'">' . $arrCast[$value]['name'] . '</a>' . ', ';
            }
        }
        return FrontHelper::removeLastChar($strRet);
    }
    
    public static function generateGenresString($genre_ids, $arrGenre, $disp_link = false) {
        $arrRet = array();
        $strRet = '';
        foreach ($arrGenre as $key => $item) {
            $arrRet[$item['id']]['name'] = $item['name'];
            $arrRet[$item['id']]['friendly_name'] = $item['friendly_name'];
        }
        $arrIn = explode(',', $genre_ids);
        foreach ($arrIn as $value) {
            if (array_key_exists($value, $arrRet)) {
                if (!$disp_link) {
                    $strRet .= '' . $arrRet[$value]['name'] . '' . ', ';
                } else {
                    $strRet .= '<a href="' . route('index.genres', $arrRet[$value]['friendly_name']) . '">' . $arrRet[$value]['name'] . '</a>' . ', ';
                }
                
            }
        }
        return FrontHelper::removeLastChar($strRet);
    }
    
    public static function removeLastChar($string) {
        return rtrim($string,', ');
    }
}