<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2017/8/11
 * Time: 14:51
 */
require_once "../include.php";

function connect(){
    $link = mysqli_connect(DB_HOST,DB_USER,DB_PWD)or die("数据库连接失败error".mysqli_error());
    mysqli_set_charset(DB_CHARSET);
    mysqli_select_db(DB_DBNAME)or die("指定数据库打开失败");
    return $link;
}
function insert ($table,$array){
    $keys=join(",",array_keys($array));
    $vals="'".join("','",array_values($array))."'";
    $sql = "insert {$table}($keys) values({$vals})";
    mysqli_query($sql);
    return mysqli_insert_id();
}

/**
 * 记录的更新操作
 * @param string $table
 * @param array $array
 * @param string $where
 * @return number
 */
function updata($table,$array,$where=null){
    foreach($array as $key=>$val){
        if ($str==null){
            $sep = "";
        }else{
            $sep=",";
        }
        $str.=$sep.$key."='".val."'";
    }
    $sql="updata {$table} set {$str} ".($where==null?null:" where ".$where);
    $result = mysqli_query($sql);
    if ($result){
        return mysqli_affected_rows();
    }else{
        return false;
    }
}
