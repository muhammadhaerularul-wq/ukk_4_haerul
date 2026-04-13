<?php
require_once "m_koneksi.php";
class Auth{
function login($email,$password){
global $conn;
$q=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$d=mysqli_fetch_assoc($q);
if($d && password_verify($password,$d['password'])) return $d;
return false;
}
function register($data){
global $conn;
$pass=password_hash($data['password'],PASSWORD_DEFAULT);
mysqli_query($conn,"INSERT INTO users VALUES(NULL,'$data[nama]','$data[email]','$pass','siswa')");
}
}?>