<html>
<head>
<title>能夠自由拖曳佈局區域的網頁</title>
</head>
<style type="text/css">
<!--
body{
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
	margin:0px; padding:0px;
	/*background-color:#ffffd5;*/
	background-color:#e6ffda;
}
.dragTable{
	font-size:12px;
	/*border:1px solid #003a82;*/
	border:1px solid #206100;
	margin-bottom:5px;
	width:100%;
	/*background-color:#cfe5ff;*/
	background-color:#c9ffaf;
}
td{
	padding:3px 2px 3px 2px;
	vertical-align:top;
}
.dragTR{
	cursor:move;
	/*color:#FFFFFF;
	background-color:#0073ff;*/
	color:#ffff00;
	background-color:#3cb500;
	height:20px;
	font-weight:bold;
	font-size:14px;
	font-family:Arial, Helvetica, sans-serif;
}
#parentTable{
	border-collapse:collapse;
}
-->
</style>
<script language="javascript" defer="defer">
var Drag={
	dragged:false,
	ao:null,
	tdiv:null,
	dragStart:function(){
		Drag.ao=event.srcElement;
		if((Drag.ao.tagName=="TD")||(Drag.ao.tagName=="TR")){
			Drag.ao=Drag.ao.offsetParent;
			Drag.ao.style.zIndex=100;
		 }else
		 	return;
		Drag.dragged=true;
		Drag.tdiv=document.createElement("div");
		Drag.tdiv.innerHTML=Drag.ao.outerHTML;
		Drag.ao.style.border="1px dashed red";
		Drag.tdiv.style.display="block";
		Drag.tdiv.style.position="absolute";
		Drag.tdiv.style.filter="alpha(opacity=70)";
		Drag.tdiv.style.cursor="move";
		Drag.tdiv.style.border="1px solid #000000";
		Drag.tdiv.style.width=Drag.ao.offsetWidth;
		Drag.tdiv.style.height=Drag.ao.offsetHeight;
		Drag.tdiv.style.top=Drag.getInfo(Drag.ao).top;
		Drag.tdiv.style.left=Drag.getInfo(Drag.ao).left;
		document.body.appendChild(Drag.tdiv);
		Drag.lastX=event.clientX;
		Drag.lastY=event.clientY;
		Drag.lastLeft=Drag.tdiv.style.left;
		Drag.lastTop=Drag.tdiv.style.top;
	},
	draging:function(){//判斷MOUSE的位置
		if(!Drag.dragged||Drag.ao==null)return;
		var tX=event.clientX;
		var tY=event.clientY;
		Drag.tdiv.style.left=parseInt(Drag.lastLeft)+tX-Drag.lastX;
		Drag.tdiv.style.top=parseInt(Drag.lastTop)+tY-Drag.lastY;
		for(var i=0;i<parentTable.cells.length;i++){
			var parentCell=Drag.getInfo(parentTable.cells[i]);
			if(tX>=parentCell.left&&tX<=parentCell.right&&tY>=parentCell.top&&tY<=parentCell.bottom){
				var subTables=parentTable.cells[i].getElementsByTagName("table");
				if(subTables.length==0){
					if(tX>=parentCell.left&&tX<=parentCell.right&&tY>=parentCell.top&&tY<=parentCell.bottom){
						parentTable.cells[i].appendChild(Drag.ao);
					}
					break;
				}
				for(var j=0;j<subTables.length;j++){
					var subTable=Drag.getInfo(subTables[j]);
					if(tX>=subTable.left&&tX<=subTable.right&&tY>=subTable.top&&tY<=subTable.bottom){
						parentTable.cells[i].insertBefore(Drag.ao,subTables[j]);
						break;
					}else{
						parentTable.cells[i].appendChild(Drag.ao);
					}
				}
			}
		}
	},
	dragEnd:function(){
		if(!Drag.dragged)
			return;
		Drag.dragged=false;
		Drag.mm=Drag.repos(150,15);
		Drag.ao.style.borderWidth="0px";
		//Drag.ao.style.border="1px solid #003a82";
		Drag.ao.style.border="1px solid #206100";
		Drag.tdiv.style.borderWidth="0px";
		Drag.ao.style.zIndex=1;
	},
	getInfo:function(o){//取得座標
		var to=new Object();
		to.left=to.right=to.top=to.bottom=0;
		var twidth=o.offsetWidth;
		var theight=o.offsetHeight;
		while(o!=document.body){
			to.left+=o.offsetLeft;
			to.top+=o.offsetTop;
			o=o.offsetParent;
		}
		to.right=to.left+twidth;
		to.bottom=to.top+theight;
		return to;
	},
	repos:function(aa,ab){
		var f=Drag.tdiv.filters.alpha.opacity;
		var tl=parseInt(Drag.getInfo(Drag.tdiv).left);
		var tt=parseInt(Drag.getInfo(Drag.tdiv).top);
		var kl=(tl-Drag.getInfo(Drag.ao).left)/ab;
		var kt=(tt-Drag.getInfo(Drag.ao).top)/ab;
		var kf=f/ab;
		return setInterval(function(){
			if(ab<1){
				clearInterval(Drag.mm);
				Drag.tdiv.removeNode(true);
				Drag.ao=null;
				return;
			}
			ab--;
			tl-=kl;
			tt-=kt;
			f-=kf;
			Drag.tdiv.style.left=parseInt(tl)+"px";
			Drag.tdiv.style.top=parseInt(tt)+"px";
			Drag.tdiv.filters.alpha.opacity=f;
		}
		,aa/ab)
	},
	inint:function(){
		for(var i=0;i<parentTable.cells.length;i++){
			var subTables=parentTable.cells[i].getElementsByTagName("table");
			for(var j=0;j<subTables.length;j++){
				if(subTables[j].className!="dragTable")
					break;
				subTables[j].rows[0].className="dragTR";
				subTables[j].rows[0].attachEvent("onmousedown",Drag.dragStart);
			}
		}
		document.onmousemove=Drag.draging;
		document.onmouseup=Drag.dragEnd;
	}
}
Drag.inint();
</script>
<body>
<table cellspacing="4" width="100%" id="parentTable">
<tr>
	<td width="25%" valgin="top">
		<table class="dragTable" cellspacing="0">
			<tr><td>蜂蜜</td></tr>
			<tr><td>蜂蜜，是昆蟲蜜蜂從開花植物的花中采得的花蜜在蜂巢中釀制的蜜。蜜蜂從植物的花中采取含水量約為80%的花蜜或分泌物，存入自己第二個胃中，在體內轉化酶的作用下經由30分鍾的發酵，回到蜂巢中吐出，蜂巢內溫度經常保持在35℃左右，經由一段時間，水份蒸發，成為水分水準少於20%的蜂蜜，存貯到巢洞中，用蜂蠟密封。</td><tr>
		</table>
		<table class="dragTable" cellspacing="0">
			<tr><td>蜂王漿</td></tr>
			<tr><td>蜂王漿（royal jelly），又名蜂皇漿、蜂乳，蜂王乳，是蜜蜂巢中培育幼蟲的青年工蜂咽頭腺的分泌物，是供給將要變成蜂王的幼蟲的食物。蜂王漿是高蛋白，並含有維生素B類別和乙酰膽鹼等。蜂王漿不能用開水或茶水沖服，並應該低溫貯存。</td><tr>
		</table>
	</td>
	<td width="25%">
		<table class="dragTable" cellspacing="0">
			<tr><td>蜂花粉</td></tr>
			<tr><td>蜂花粉是有花植物雄蕊中的雄性生殖細胞，它不僅攜帶著生命的遺傳訊息，而且包括著孕育新生命所必需的全部營養物質，是植物傳宗接代的根本，熱能的源泉。蜂花粉是由蜜蜂從植物花中采集的花粉經蜜蜂加工成的花粉團，被譽為“全能的營養食品”、“濃縮的天然藥庫”、“全能的營養庫”、“內服的化妝品”、“濃縮的氨基酸”等，是“人類別天然食品中的瑰寶”。</td><tr>
		</table>
	</td>
	<td width="25%">
		<table class="dragTable" cellspacing="0">
			<tr><td>蜂毒</td></tr>
			<tr><td>蜂毒是一種透明液體，具有特殊的芳香氣味，味苦、呈酸性反應，pH為5.0～5.5，比例為1.1313。在常溫下很快就揮發干燥至原來液體重量的30%～40%，</td><tr>
		</table>
		<table class="dragTable" cellspacing="0">
			<tr><td>蜂膠</td></tr>
			<tr><td>蜂膠是蜜蜂從植物芽孢或樹干上采集的樹脂（樹膠），混入蜜蜂口器中腺體的分泌物，再和花粉、蜂蠟加工製成的一種膠狀物質，是蜂巢的保護傘。一個5～6萬只的蜂群一年只能生產蜂膠100～150克，被譽為“紫色黃金”</td><tr>
		</table>
	</td>
</tr>
</table>
</body>
</html>

