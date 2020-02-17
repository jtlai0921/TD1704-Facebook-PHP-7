<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>if敘述的使用</title>
</head>
<body>
<?php
	$num = rand(1,100);						//使用rand()函數產生一個隨機數
	if ($num % 2 != 0)
	{						//判斷變數$num是否為奇數
		echo "\$num = $num";				//若果為奇數，輸出表達式和說明文字
		echo "<br>$num 是奇數。";
	}
?>
</body>
</html>
