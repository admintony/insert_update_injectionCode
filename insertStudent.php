<?php
	header("content-type:text/html;charset=utf-8");
	error_reporting(0);
	//1.把学生数据获取到
	//echo "<pre>";
	//print_r($_POST);
	$stuName = $_POST[stuName];
	$stuSex = $_POST[stuSex];
	$stuAge = $_POST[stuAge];
	$stuChinese = $_POST[stuChinese];
	$stuEnglish = $_POST[stuEnglish];
	$stuMath = $_POST[stuMath];
	$stuClass = $_POST[stuClass];
	//2.连接数据库
	require './config/config.php';
	if(!$conn){
		echo "数据库连接失败";
		exit;
	}
	
	//3.选择数据库
	mysql_select_db($database);
	
	//4.拼接sql语句 , 字符串要用单引号包起来
	
	$sql = "INSERT INTO student(name,sex,age,cn,en,math,class) values('$stuName','$stuSex',$stuAge,$stuChinese,$stuEnglish,$stuMath,'$stuClass')";
	echo $sql;
	//5.发送到dbms执行，并取回结果
	if(mysql_query($sql)){
		echo "<br>添加学生成功！<br><a href='index.php'>查看数据</a>";
	}else{
		echo "<br>添加学生失败！<br>".mysql_error();
	}
	
	
	