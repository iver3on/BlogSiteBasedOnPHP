<?php
	header("Content-type: text/html; charset=utf-8");
	//连库、择库、设定字符集
	mysql_connect('localhost', 'root', '123');
	mysql_select_db('info');
	mysql_query('set names utf8');
	$query = mysql_query('select * from fruitshop');
	//$arr = mysql_fetch_row($query);
	//echo $arr[0];
	echo mysql_result($query, 2, 1);//结果集的地址   行号，从0开始  字段名，偏移量从0开始
?>