<html>
      <head>
           <title>訪客計數器</title>
      </head>
      <body>
          <?php
              if (!@$fp=fopen("coun.txt","r")){
                    //只讀模式開啟coun.txt檔案
                    echo "coun.txt檔案建立成功！<br>";
                  }
              @$num=fgets($fp,12);   //讀取11位數字
              if ($num=="") $num=0;
                 //若果檔案的內容為空，起始化為0
              $num++;              //瀏覽次數加一
              @fclose($fp);         //關閉檔案
              $fp=fopen("coun.txt", "w");//只寫模式開啟coun.txt檔案
              fwrite($fp,$num);    //寫入加一後結果
              fclose($fp);         //關閉檔案
              echo "您是第".$num."位瀏覽者!";         //瀏覽器輸出瀏覽次數
          ?>
     </body>
</html>
