<?php   
header("Content-type:text/html;charset=utf-8");   
$con=mysql_connect('127.0.0.1','root','root'); // 这里的user为mysql的用户名，password为密码       
if(!$con)       
{       
echo "fail";       
}       
else      
{    
echo "连接mysql success";       
} 
if(mysql_select_db('zzz')){
	echo "选择数据库成功";
	//utf-8 三个汉字一个字符 varchar
}else{
	echo "选择数据库失败";
}
mysql_close($con);
?>     