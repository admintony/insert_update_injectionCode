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
	
	//3.拼接SQL语句
	$sql = "SELECT * FROM student";
	
	//4.发送sql语句
	$res = mysql_query($sql);
	
	//5.取出结果并显示
	echo "<title>注入测试 by:T00ls</title>";
	echo "<h1 align=center>INSERT 、UPDATE注入测试代码</h1><h2 align=center> by：T00ls . AdminTony</h2>";
	echo "<table align=center border='1px' weight='400px'>";
	echo "<tr><td>学生编号</td><td>学生姓名</td><td>学生性别</td><td>学生年龄</td><td>语文成绩</td><td>英语成绩</td><td>数学成绩</td><td>学生班级</td><td>操作</td></tr>";
	while($row = mysql_fetch_assoc($res)){
		//echo "<pre>";
		//print_r($row);
		echo "<tr>";
		foreach($row as $key => $value){
			if($key === 'id'){
				//将id拿出来
				$uid = $value;
			}
			echo "<td>$value</td>";
		}
		echo "<td><a href='updateStu.php?id=$uid'>修改</a> <a href='delStu.php?id=$uid'>删除</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<div style='margin-left:50% ;'><a align=center href='addStudent.html'>添加学生</a></div>";
