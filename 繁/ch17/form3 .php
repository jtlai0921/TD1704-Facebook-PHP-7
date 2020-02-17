<html >
<head>
<title>樹狀選單</title>
</head>
<script type="text/javascript" >
 function addEvent(el,name,fn){//綁定事件
  if(el.addEventListener) return el.addEventListener(name,fn,false);
  return el.attachEvent('on'+name,fn);
 }
 function nextnode(node){//尋找下一個兄弟並剔除空的文字節點
  if(!node)return ;
  if(node.nodeType == 1)
   return node;
  if(node.nextSibling)
   return nextnode(node.nextSibling);
 }
 function prevnode(node){//尋找上一個兄弟並剔除空的文字節點
  if(!node)return ;
  if(node.nodeType == 1)
   return node;
  if(node.previousSibling)
   return prevnode(node.previousSibling);
 }
 function parcheck(self,checked){//遞歸尋找父親元素，並找到input元素進行動作
  var par =  prevnode(self.parentNode.parentNode.parentNode.previousSibling),parspar;
  if(par&&par.getElementsByTagName('input')[0]){
   par.getElementsByTagName('input')[0].checked = checked;
   parcheck(par.getElementsByTagName('input')[0],sibcheck(par.getElementsByTagName('input')[0]));
  }
 }
 function sibcheck(self){//判斷兄弟節點是否已經全部勾選
  var sbi = self.parentNode.parentNode.parentNode.childNodes,n=0;
  for(var i=0;i<sbi.length;i++){
   if(sbi[i].nodeType != 1)//由於孩子節點中內含空的文字節點，所以這裡累計長度的時候也要算上去
    n++;
   else if(sbi[i].getElementsByTagName('input')[0].checked)
    n++;
  }
  return n==sbi.length?true:false;
 }
 addEvent(document.getElementById('menu_zzjs_net'),'click',function(e){//綁定input點擊事件，使用menu_zzjs_net根元素代理
  e = e||window.event;
  var target = e.target||e.srcElement;
  var tp = nextnode(target.parentNode.nextSibling);
  switch(target.nodeName){
   case 'A'://點擊A標簽展開和收縮樹狀目錄，並改變其型態會勾選checkbox
    if(tp&&tp.nodeName == 'UL'){
     if(tp.style.display != 'block' ){
      tp.style.display = 'block';
      prevnode(target.parentNode.previousSibling).className = 'ren'
     }else{
      tp.style.display = 'none';
      prevnode(target.parentNode.previousSibling).className = 'add'
     }
    }
    break;
   case 'SPAN'://點擊圖示只展開或是收縮
    var ap = nextnode(nextnode(target.nextSibling).nextSibling);
    if(ap.style.display != 'block' ){
     ap.style.display = 'block';
     target.className = 'ren'
    }else{
     ap.style.display = 'none';
     target.className = 'add'
    }
    break;
   case 'INPUT'://點擊checkbox，父親元素勾選，則孩子節點中的checkbox也同時勾選，孩子節點取消父元素隨之取消
    if(target.checked){
     if(tp){
      var checkbox = tp.getElementsByTagName('input');
      for(var i=0;i<checkbox.length;i++)
       checkbox[i].checked = true;
     }
    }else{
     if(tp){
      var checkbox = tp.getElementsByTagName('input');
      for(var i=0;i<checkbox.length;i++)
       checkbox[i].checked = false;
     }
    }
    parcheck(target,sibcheck(target));//當孩子節點取消勾選的時候呼叫該方法遞歸其父節點的checkbox逐一取消勾選
    break;
  }
 });
 window.onload = function(){//頁面載入時給有孩子節點的元素動態加入圖示
  var labels = document.getElementById('menu_zzjs_net').getElementsByTagName('label');
  for(var i=0;i<labels.length;i++){
   var span = document.createElement('span');
   span.style.cssText ='display:inline-block;height:18px;vertical-align:middle;width:16px;cursor:pointer;';
   span.innerHTML = ' '
   span.className = 'add';
   if(nextnode(labels[i].nextSibling)&&nextnode(labels[i].nextSibling).nodeName == 'UL')
    labels[i].parentNode.insertBefore(span,labels[i]);
   else
    labels[i].className = 'rem'
  }
 }
</script>

<body>
<ul id="menu_zzjs_net">
 <li>
  <label><a href="javascript:;">電腦圖書</a></label>
  <ul class="two">
   <li>
    <label><a href="javascript:;">程式類別圖書</a></label>
    <ul class="two">
     <li>
      <label><input type="checkbox" value="123456"><a href="javascript:;">Java類別圖書</a></label>
      <ul class="two">
       <li><label><input type="checkbox" value="123456"><a href="javascript:;">Java語系類別圖像</a></label></li>
       <li>
        <label><input type="checkbox" value="123456"><a href="javascript:;">Java框架類別圖像</a></label>
        <ul class="two">
         <li>
          <label><input type="checkbox" value="123456"><a href="javascript:;">Struts2圖書</a></label>
          <ul class="two">
           <li><label><input type="checkbox" value="123456"><a href="javascript:;">Struts1</a></label></li>
           <li><label><input type="checkbox" value="123456"><a href="javascript:;">Struts2</a></label></li>
          </ul>
         </li>
         <li><label><input type="checkbox" value="123456"><a href="javascript:;">Hibernate入門</a></label></li>
        </ul>
       </li>
      </ul>
     </li>
    </ul>
   </li>
   <li>
    <label><a href="javascript:;">設計類別圖像</a></label>
    <ul class="two">
     <li><label><input type="checkbox" value="123456"><a href="javascript:;">PS案例大全</a></label></li>
     <li><label><input type="checkbox" value="123456"><a href="javascript:;">Flash基礎入門</a></label></li>
    </ul>
   </li>
  </ul>
 </li>
</ul>
</body>
</html>
