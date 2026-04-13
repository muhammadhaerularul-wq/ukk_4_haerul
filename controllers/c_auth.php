<?php
session_start();
require_once "../models/m_auth.php";
$a=new Auth();

if($_GET['aksi']=='login'){
$d=$a->login($_POST['email'],$_POST['password']);
if($d){
$_SESSION['user']=$d;
if($d['role']=='admin') header("Location:../views/admin/dashboard.php");
else header("Location:../views/user/index.php");
}else echo "Login gagal";
}

if($_GET['aksi']=='register'){
$a->register($_POST);
header("Location:../index.php");
}

if($_GET['aksi']=='logout'){
session_destroy();
header("Location:../index.php");
}
?>