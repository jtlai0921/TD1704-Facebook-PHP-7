<?php
include "inc/mysql.inc";
include "inc/myfunction.inc";
$aa=new mysql;
$bb=new mysql;
$aa->link("mysql");
//建立資料庫
$query="CREATE DATABASE `bbs_data`";
if ($aa->excu($query)){
    echo "===資料庫建立成功！===";
    }
$bb->link("bbs_data");
//////////建立資料表father_module_info/////////////
$query="CREATE TABLE `father_module_info` (
  `id` int(11) NOT NULL auto_increment,
  `module_name` varchar(66) default NULL,
  `show_order` int(11) default '0',
  UNIQUE KEY `id` (`id`)
) ";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;資料表-father_module_info-建立成功！";
//////////建立資料表manage_user_info/////////////
$query="CREATE TABLE `manage_user_info` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(16) NOT NULL,
  `user_pw` varchar(16) NOT NULL,
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;資料表-manage_user_info-建立成功！";
//////////建立資料表note_info/////////////
$query="CREATE TABLE `note_info` (
  `id` int(11) NOT NULL auto_increment,
  `module_id` int(11) default '0',
  `up_id` int(11) default '0',
  `title` varchar(88) NOT NULL,
  `cont` text NOT NULL,
  `time` datetime NOT NULL,
  `user_name` varchar(16) NOT NULL,
  `times` int(11) default '0',
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;資料表-note_info-建立成功！";
//////////建立資料表son_module_info/////////////
$query="CREATE TABLE `son_module_info` (
  `id` int(11) NOT NULL auto_increment,
  `father_module_id` int(11) NOT NULL,
  `module_name` varchar(66) NOT NULL,
  `module_cont` text NOT NULL,
  `user_name` varchar(16) default NULL,
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;資料表-son_module_info-建立成功！";
//////////建立資料表user_info/////////////
$query="CREATE TABLE `user_info` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(16) NOT NULL,
  `user_pw` varchar(16) NOT NULL,
  `time1` datetime default '0000-00-00 00:00:00',
  `time2` datetime default '0000-00-00 00:00:00',
  UNIQUE KEY `id` (`id`)
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;資料表-user_info-建立成功！";
//////////////////起始化資料//////////////////////////
echo "<br>===起始化基本資料===";
//////////////////起始化管理使用者名稱和密碼//////////////////////////
$query="INSERT INTO `manage_user_info` VALUES (1, 'admin', 'admin')";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;管理員使用者名稱、密碼起始成功";
echo "<br>&nbsp;&nbsp;&nbsp;使用者名稱：admin";
echo "<br>&nbsp;&nbsp;&nbsp;密 碼：admin";
//////////////////起始化測試父板塊//////////////////////////
$query="INSERT INTO `father_module_info` VALUES (1, '測試父板塊', 1)";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;加入“測試父板塊”成功！";
//////////////////起始化測試子板塊//////////////////////////
$query="INSERT INTO `son_module_info` VALUES (1, 1, '測試子板塊', '這是為了測試子板塊而加入的', '');";
$aa->excu($query);
echo "<br>&nbsp;&nbsp;加入“測試子板塊”成功！";
?>
