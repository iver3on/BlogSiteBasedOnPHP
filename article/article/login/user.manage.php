<?php
	require_once('../connect.php');
	$sql = "select * from user";
	$query  = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row =mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}else{
		$data = array();
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>用户管理系统</strong></td>
  </tr>
  <tr>
    <td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99"><p><a href="user.register.php">用户注册</a></p>
    <p><a href="user.login.php">用户登录</a></p></td>
    <td width="837" valign="top" bgcolor="#FFFFFF"><table width="743" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF">用户管理列表</td>
        </tr>
      <tr>
        <td width="37" bgcolor="#FFFFFF">编号</td>
        <td width="572" bgcolor="#FFFFFF">ID</td>
        <td width="82" bgcolor="#FFFFFF">密码</td>
        <td width="82" bgcolor="#FFFFFF">操作</td>
      </tr>
	<?php 
		if(!empty($data)){
			foreach($data as $value){
	?>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['name']?></td>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['password']?></td>
        <td bgcolor="#FFFFFF"><a href="user.del.handle.php?id=<?php echo $value['id']?>">删除</a> <a href="user.modify.php?id=<?php echo $value['id']?>">修改</a></td>
      </tr>
        <?php
        		}
		}
        ?>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有</strong></td>
  </tr>
</table>
</body>
</html>
