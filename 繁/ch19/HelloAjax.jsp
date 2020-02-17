<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>第一個Ajax案例</title>
    <style type="text/css">
      <!--
       body {
	        background-image: url(images/img.jpg);
       }
      -->
    </style>
  </head>
<script type="text/javascript">
var xmlHttp=false;
function createXMLHttpRequest() 
{
	if (window.ActiveXObject)                        //在IE瀏覽器中建立XMLHttpRequest物件
	{
		try{
          xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
		catch(e){
			try{
                xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
               }
			   catch(ee){
                 xmlHttp=false;
               }
		}
    }
	else if (window.XMLHttpRequest)               //在非IE瀏覽器中建立XMLHttpRequest物件
	{
		try{
            xmlHttp = new XMLHttpRequest();
        }
		catch(e){
            xmlHttp=false;
        }
   }
}
function hello()
{
	createXMLHttpRequest();   //呼叫建立XMLHttpRequest物件的方法
	xmlHttp.onreadystatechange=callback;   //設定回調函數
	xmlHttp.open("get","HelloAjaxDo.jsp");      //向伺服器端傳送請求
	xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=gb2312");
	xmlHttp.send(null);	
	function callback()
	{
		if(xmlHttp.readyState==4)
		{
			if(xmlHttp.status==200)
			{
               var data= xmlHttp.responseText;
               var pNode=document.getElementById("p");
               pNode.innerHTML=data;
			}
		}		
	}
}	

</script>
  <body><br>
    <center>
       <button onclick="hello()">Ajax</button>
       <P id="p">
           點選按鈕後你會有驚奇的發現喲！
       </P>
    </center>
  </body>
</html>
