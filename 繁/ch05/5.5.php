<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
   $someinput = "How mang words in this sentance? Just count it.";
   $someinput2 = "這個句子有多少個中文字群組成？數一數也不知道。";
   echo str_word_count($someinput)."<br />";
   echo str_word_count($someinput2);
?>
</BODY>
</HTML>
