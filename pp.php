<?php
$filename="see/README.md";
$fp=fopen($filename,"a","r");
$qwq = fread($fp,filesize($filename));
$dir="/see/";
$list = scandir($dir);
foreach ($list as $value) {
    $ext = substr(stristr($value, 'l'),0,4);//截取文件夹名
    if (in_array($ext, array('lett'))) {//查询是否为picture文件夹
	if($value=="lett/"){//跳过文件夹
     continue;
	}
	 $exxt = substr(stristr($value, 'R'),0,1);
	if($exxt == "R"){
		continue;
	}
	fwrite($fp,"# [https://xwzx.rth.app/".$value."](https://xwzx.rth.app/".$value.")\n");
	}
}
fclose($fp);
echo "<script>location.href='https://xwzx.rth.app/".$value."';</script>";
?>


