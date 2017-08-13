<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2017/8/11
 * Time: 17:46
 */
$username=$_POST['username'];
$username=addslashes($username);
$password=md5($_POST['password']);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];