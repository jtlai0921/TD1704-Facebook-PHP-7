<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>楊輝三角</title>
</head>
<body>
<?php
	$mixnum = 1;
	$maxnum = 10;
	$tmparr[][] = array();
	$tmparr[0][0] = 1;
	for($i = 1; $i < $maxnum; $i++):
		for($j = 0; $j <= $i; $j++):
			if($j == 0 or $j == $i):
				$tmparr[$i][$j] = 1;
			        else:
				$tmparr[$i][$j] = $tmparr[$i - 1][$j - 1] + $tmparr[$i - 1][$j];
			endif;
		endfor;
	endfor;	
	foreach($tmparr as $value):
		foreach($value as $vl)
			echo $vl.' ';
		echo '<p>';
	endforeach;
?>
</body>
</html>
