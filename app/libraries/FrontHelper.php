<?php
class FrontHelper {
    public static function generateCastString($cast_ids) {
        $casts = CastModel::listAll()->toArray();
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
    
    public static function removeLastChar($string) {
        return rtrim($string,', ');
    }
}