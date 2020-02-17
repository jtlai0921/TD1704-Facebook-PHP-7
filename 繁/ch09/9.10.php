<html>
<head>
<title>頂層例外處理器</title>
</head>
<body>
<?php
function myException($exception){
echo "<b>例外是:</b> " , $exception->getMessage();
}
set_exception_handler('myException');
throw new Exception('正在處理未被捕捉的例外');
?>
</body>
</html>