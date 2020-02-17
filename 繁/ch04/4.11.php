<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>while敘述的使用</title>
</head>
<body>
<?php
	$num = 1;
	$str = "20以內的奇數為：";
	while($num <= 20){
		if($num % 2!= 0){
			$str .= $num." ";
		}
		$num++;
	}
	echo $str;
?>
</body>
</html>
