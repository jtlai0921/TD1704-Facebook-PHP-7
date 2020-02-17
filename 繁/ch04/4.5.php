<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>對函數的參考</title>
</head>
<body>
<?php
function &example($tmp=1){                //定義一個函數，別忘了加“&”符
return $tmp;                         //傳回參數$str
}
$str = &example("參考函數的案例");                //宣告一個函數的參考$str1;
echo $str."<p>";
?>
</body>
</html>
