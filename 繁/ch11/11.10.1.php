<html>
<head>
<title>實現上傳檔案</title>
</head>
<body>
<?php
if ($_POST[add]=="上傳"){
       //根據現在的時間產生一個隨機數
       $rand1=rand(0,9);
       $rand2=rand(0,9);
       $rand3=rand(0,9);
       $filename=date("Ymdhms").$rand1.$rand2.$rand3;       
       if(empty($_FILES['file_name']['name'])){  
	   			 //$_FILES['file_name']['name']為取得用戶端機器檔案的原名稱
           echo "檔名不能為空";
           exit;
           }
       $oldfilename=$_FILES['file_name']['name'];
       echo "<br>原檔名為：".$oldfilename;       
       $filetype=substr($oldfilename,strrpos($oldfilename,"."),strlen($oldfilename)-strrpos($oldfilename,"."));
       echo "<br>原檔案的型態為：".$filetype;
       if(($filetype!='.doc')&&($filetype!='.xls')&&($filetype!='.DOC')&&($filetype!='.XLS')){
          echo "<script>alert('檔案型態或位址錯誤');</script>";
          echo "<script>location.href='12.3.php';</script>";
          exit;
          }
       echo "<br>上傳檔案的大小為（位元組）：".$_FILES['file_name']['size'];
	   			//$_FILES['file_name']['size']為取得用戶端機器檔案的大小，單位為B
       if ($_FILES['file_name']['size']>1000000) {
           echo "<script>alert('檔案太大，不能上傳');</script>";
          echo "<script>location.href='12.3.php';</script>";
          exit;
           }
       echo "<br>檔案上傳伺服器後的暫存檔名為：".$_FILES['file_name']['tmp_name'];
					//取得儲存檔案的暫存檔名（含路徑）
       $filename=$filename.$filetype;
       echo "<br>新檔名為：".$filename;       
       $savedir="file/".$filename;
       if(move_uploaded_file($_FILES['file_name']['tmp_name'],$savedir)){
            $file_name=basename($savedir);       //取得儲存檔案的檔名（不含路徑）
            echo "<br>檔案上傳成功！儲存為：".$savedir;
           }else{
             echo "<script language=javascript>";
             echo "alert('錯誤，無法將附屬應用程式寫入伺服器!\n本次發布失敗！');";
             echo "location.href='12.3.php?';";
             echo "</script>";
             exit;
         }       
    }
?>
</body>
