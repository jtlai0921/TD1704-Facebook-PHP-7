<html>
<head>
<title>處理例外或錯誤</title>
</head>
<body>
<?php
 $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
 @$fp = fopen("$DOCUMENT_ROOT/book.txt",'rb');
 try{
    if (!$fp){
      throw new Exception("檔案路徑有誤或找不到檔案。");
  }
 }catch(Exception $exception){
    echo $exception->getMessage();
  echo "在檔案". $exception->getFile()."的".$exception->getLine()."行。<br />";
 } 
 @fclose($fp);
?>
</body>
</html>
