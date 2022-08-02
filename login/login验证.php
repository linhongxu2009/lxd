<?php
session_start();
$_SESSION['pos']=$_POST["mm"];

if ($_SESSION['pos']=="glymm"){
echo "<script>alert('登陆成功');location.href='https://xwzx.rth.app/#/';</script>";
 }
 else{
	echo "<script>alert('密码错误');location.href='login.php';</script>"; 
 }
 
?>



