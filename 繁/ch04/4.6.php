<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>對函數取消參考</title>
</head>
<body>
<?php
	$num = 166;						//宣告一個整數變數
	$math = &$num;						//宣告一個對變數$num的參考$math
	echo "\$math is:  ".$math."<br>";	//輸出參考$math
	unset($math);						//取消參考$math
	echo "\$math is: ".$math."<br>";	//再次輸出參考
	echo "\$num is:  ".$num;			//輸出原變數
?>
</body>
</html>
