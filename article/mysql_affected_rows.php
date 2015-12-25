<?php
	header("Content-type: text/html; charset=utf-8");
	//连库、择库、设定字符集
	$con = mysql_connect('localhost', 'root', '123');
	mysql_select_db('info');
	mysql_query('set names utf8');
	//mysql 的增删改
	//通过mysql_query 向mysql数据库传递 insert update delete 语句
	/*if(mysql_query('update fruitshop set num=9 where id=1')){
		echo "修改成功，修改的数据条数为";
		echo mysql_affected_rows($con);//连接标识符, 当修改的数据和之前一样的时候，影响条数为0
	}else{
		echo "修改失败";
	}*/
	mysql_query('insert into fruitshop(name, num, price) values(\'西瓜\', 9, 5);');
	if(mysql_query('insert into fruitshop(name, num, price) values(\'菠萝\', 9, 5);')){
		echo "插入成功，插入的数据条数为";
		echo mysql_affected_rows($con);//只能获取到前一次操作所影响的行数
	}else{
		echo "插入失败";
	}
?>