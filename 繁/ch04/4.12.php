<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>while敘述的使用</title>
</head>
<body>
<?php
	$num = 0;
	while($num != 0){
		echo "不會被執行的內容";
	}
	do{
		echo "被執行的內容";
	}while($num != 0);
?>
</body>
</html>
