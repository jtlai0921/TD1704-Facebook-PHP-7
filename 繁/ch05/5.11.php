<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
  $email = "wangxioaming2011@hotmail.com";
  $email2 = "The email is liuxiaoshuai_2011@hotmail.com";
  $asemail = "This is wangxioaming2011@hotmail";
  $regex =  '^[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$';
  $regex2 =  '[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$';
  if(fnmatch($regex, $email, $a)){
      echo "This is an email.";
	  print_r($a);
	  echo "<br />";
  }
  if(fnmatch($regex2, $email2, $b)){
      echo "This is a new email.";
	  print_r($b);
	  echo "<br />";
  }
  if(fnmatch($regex, $asemail)){
      echo "This is an email.";
  }else{
      echo "This is not an email.";
  }
?>
</BODY>
</HTML>

