<html>  
<head>  
<title>數字即時驗證</title>
<script type="text/javascript">  
function checkDecimal(element){    
var tmp = element.value.split(".")    
if(!isNaN(element.value)){    
    if(tmp.length!=2||tmp[1].length!=2){    
    document.myForm.aaa.focus();    
    //document.getElementByName("name").focus();   
    alert("輸入金額請保留2位小數！");    
    document.getElementById('aaa').value='0.00';    
    return false;   
    }    
}    
else{    
    alert("輸入金額必須是數字型態！");     
    document.getElementById('aaa').focus();    
    document.getElementById('aaa').value='0.00';    
    return false;   
    }    
}   
</script>  
</head>      
<body >  
 <h3>數字即時驗證</h3>
<form name="myForm">  
金額:    
<input type="text" id="aaa" name="aaa" value="0.00" onblur="checkDecimal(this);"><br></br>
合計：   
<input type="text" id="bbb" name="bbb" ><br></br>
</form>  
</body>  
</html>  
