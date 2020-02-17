<?php
 function head($str){
?>
<LINK href="Admin_Style.css" rel=stylesheet>
<STYLE type=text/css>
.STYLE4 {
	COLOR: #000000
}
</STYLE>
<BODY leftMargin=0 topMargin=0 marginheight="0" marginwidth="0">
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD width=392 rowSpan=2><img height=126 
      src="image/adminmain01.gif" width=392></TD>
    <TD vAlign=top background=image/adminmain0line2.gif 
    height=114>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD height=20></TD></TR>
        <TR>
          <TD><SPAN class=STYLE4>频道管理中心</SPAN></TD></TR>
        <TR>
          <TD height=8><IMG height=1 
            src="image/adminmain0line.gif" width=283></TD></TR>
        <TR>
          <TD><IMG src="image/img_u.gif" 
            align=absMiddle>欢迎进入管理<FONT 
        color=#ff0000></FONT></TD></TR>
        <TR>
          <TD><IMG src="image/img_u.gif" align=absMiddle>
          <?php
          echo "当前位置：<b><font color=#ffffff>".$str."</font></b>";
          ?></TD>
        </TR>
        </TBODY></TABLE></TD></TR>
  <TR>
    <TD vAlign=bottom background=image/adminmain03.gif 
    height=9><IMG height=12 src="image/adminmain02.gif" 
      width=23></TD></TR></TBODY></TABLE>
	  <?php
	   }
?>	  
