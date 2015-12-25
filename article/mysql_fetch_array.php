<?php
	header("Content-type: text/html; charset=utf-8");
	//连库、择库、设定字符集
	mysql_connect('localhost', 'root', '123');
	mysql_select_db('info');
	mysql_query('set names utf8');
	//发指令、取数据
	$query = mysql_query('select * from test');

	//print_r(mysql_fetch_array($query));
	/*************************************************
	mysql_fetch_row和mysql_fetch_array的区别:
	1、mysql_fetch_row取一条数据产生一个索引数组
	2、mysql_fetch_array默认状态下取一条数据产生一个索引数组和一个关联数组
	**************************************************/
	$arr = mysql_fetch_array($query);
	/********************************
	mysql_fetch_array的第二个参数
	1、MYSQL_ASSOC - 关联数组
	2、MYSQL_NUM - 数字数组（索引数组）
	3、MYSQL_BOTH - 默认
	***********************************/

	print_r($arr);




	/*************关联数组***************/
	mysql_fetch_array($query, MYSQL_ASSOC);
	/*************索引数组***************/
	mysql_fetch_row($query);
	mysql_fetch_array($query, MYSQL_NUM);
	/*************关联+索引数组*********/
	mysql_fetch_array($query, MYSQL_BOTH);
	mysql_fetch_array($query);



?>