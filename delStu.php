<?php
	header("content-type:text/html;charset=utf-8");
	error_reporting(0);
	//1.连接数据库
	require './config/config.php';
	if(!$conn){
		echo "数据库连接失败!";
		exit;
	}
	//2.选择数据库
	mysql_select_db($database);
	
	$id = $_GET['id'];
	
	//3.拼接sql语句
	$sql = "delete from student where id = $id";
	
	echo $sql;	
	//4.发送到dbms，并执行
	$res = mysql_query($sql);
	
	if(mysql_query($sql)){
		echo "<br>删除学生成功！<br><a href='index.php'>查看数据</a>";
	}else{
		echo "<br>删除学生失败！<br>".mysql_error();
	}
	