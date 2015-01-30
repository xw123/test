<?php
//DB链接
session_start();
header('Content-Type:text/html; charset=utf-8');
$conn = @mysql_connect('localhost', 'root', '123') or die("数据库连接失败MySQl!");

$conn_db = mysql_select_db('popularize', $conn) or die("未找到数据库popularize!");
mysql_query("set names 'GBK'");