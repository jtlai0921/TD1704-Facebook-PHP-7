<html>
<head>
<title> 將目前目錄修改directory</title>
</head>
<body>
<?php
if(chdir("d:/ch12")){
    echo "目前目錄變更為：d:/ch11<br>";
    }else{
        echo "目前目錄變更失敗了";
    }
?>
</body>
</html>
