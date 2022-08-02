<?php
session_start();

if ($_SESSION['pos']=="glymm"){
$htmltitle = $_POST["htmltitle"];
$htmlbody=$_POST["htmlbody"];
$html1="";
$html1="<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>$htmltitle</title>
  <link rel=\"stylesheet\" href=\"../../allcss/vue.css\">
</head>
<body>
  <div id=\"app\">加载中...</div>
  <script>
    window.$docsify = {
		name: '',
		repo: ''
    }
  </script>
  <script src=\"../../alljs/docsify@4.js\"></script>
</body>
</html>
";
$filedir="lett/".time();
$filename="README.md";
$fp=fopen("$filedir/$filename","w");
fwrite($fp,$htmlbody);
fclose($fp);
$filename="index.html";
$fp=fopen("$filedir/index.html","w");
fwrite($fp,$html1);
fclose($fp);
echo "<script>location.href='pp.php';</script>";
 }
 else{
	echo "<script>alert('密码错误');location.href='login/login.php';</script>";  
 }
?>


