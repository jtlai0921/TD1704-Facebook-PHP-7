<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");
while ($token !== false)
  {
  echo "$token<br />";
  $token = strtok(" ");
  }
?>
</BODY>
</HTML>
