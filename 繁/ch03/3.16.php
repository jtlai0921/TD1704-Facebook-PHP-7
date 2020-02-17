<HTML>
<HEAD>
    <TITLE>使用比較運算符</TITLE>
</HEAD>
<BODY>
<?PHP 
$value="15";
echo "\$value = \"$value\"";
echo "$value==15: ";
var_dump($value==15);       //結果為:bool(true)
echo "\$value==ture: ";
var_dump($value==true);       //結果為:bool(true)
echo "\$value!=null: ";
var_dump($value!=null);       //結果為:bool(true)
echo "\$value==false: ";
var_dump($value==false);      //結果為:bool(false)
echo "\$value === 15: ";
var_dump($value===15);      //結果為:bool(false)
echo "\$value===true: ";
var_dump($value===true);      //結果為:bool(true)
echo "(10/2.0 !== 5): ";
var_dump(10/2.0 !==5);        //結果為:bool(true)
?>
</BODY>
<HTML>
