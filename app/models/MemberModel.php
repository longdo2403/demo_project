<?php
class MemberModel extends Eloquent {
    protected $table = 'dtb_users';
    
    /**
     * function save User to dtb_users
     * @param unknown $arrData
     * @return unknown
     */
    public static function saveUser($arrData) {
        $user = new MemberModel();
        $user->first_name = $arrData['first_name'];
        $user->last_name  = $arrData['last_name'];
        $user->display_name = $arrData['display_name'];
        $user->email = $arrData['email'];
        $user->password = Hash::make($arrData['password']);
        $ret = $user->save();
        return $ret;
    }
}