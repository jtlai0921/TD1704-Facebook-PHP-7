<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>elseif敘述的使用</title>
</head>
<body>
<?php
$score = 85;                                     //設定成績變數$score
if ($score >= 0 and $score <= 60){				//判斷成績變數是否在0-60之間
echo "您的成績為差";	//若果是，說明成績為差
}elseif($score > 60 and $score <= 80){			//否則判斷日期變數是否在61-80之間
echo "您的成績為中等";	//若果是，說明成績為中等
}else{                                     //若果兩個判斷都是false，則輸出預設值
echo "您的成績為優等";	//說明成績為優等
}
?>
</body>
</html>
