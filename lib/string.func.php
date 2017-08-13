<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2017/8/11
 * Time: 15:00
 */
function buildRandomString( $type=1,$length=4){

    if ($type==1){
        $chars=join("",range(0,9));
    }elseif($type==2){
        $chars=join("",array_merge(range("A","Z"),range("a","z")));

    }elseif ($type==3){
        $chars=join("",array_merge(range("A","Z"),range("a","z"),range(0,9)));
}
    if ($length>strlen($chars)){
        exit("字符串长度不够");
    }
    $chars=str_shuffle($chars);
    return substr($chars,0,$length);
}
