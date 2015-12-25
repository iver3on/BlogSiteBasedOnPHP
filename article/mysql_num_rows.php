<?php
	header("Content-type: text/html; charset=utf-8");
	//连库、择库、设定字符集
	mysql_connect('localhost', 'root', '123');
	mysql_select_db('info');
	mysql_query('set names utf8');
	//发指令、取数据
	$query = mysql_query('select * from fruitshop');
	if($query && mysql_num_rows($query)){
		//进行数据的输出
		while($row = mysql_fetch_row($query)){
			
		}
	}else{
		echo '没有数据';
	}
?>