<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>抽象類別</title>
</head>
<body>
<?php
	abstract class MyObject{
		abstract function service($getName,$price,$num);
	}
	class MyBook extends MyObject{
		function service($getName,$price,$num){
			echo '購買的商品是'.$getName.'，商品的價格是：'.$price.' 元。';
			echo '您購買的數量為：'.$num.' 本。';
					}
	}
	class MyComputer extends MyObject{
		function service($getName,$price,$num){
			echo '您購買的商品是'.$getName.'，該商品的價格是：'.$price.' 元。';
			echo '您購買的數量為：'.$num.' 本。';
		}
	}
	$book = new MyBook();
	$computer = new MyComputer();
	$book -> service('《PHP5.5從零度開始學》',59,15);
	echo '<p>';
	$computer -> service('MySQL5.6從零開始學',65,10);
	
	
?>
</body>
</html>
