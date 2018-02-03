<html>
<head>
<meta charset="utf-8">
<title>修改学生信息</title>
</head>
<?php
	header("content-type:text/html;charset=utf-8");
	error_reporting(0);
	require './config/config.php';
	if(!$conn){
			echo "数据库连接失败！";
			exit;
		}
		//echo "$sql";
	mysql_select_db($database);
	$id = $_GET['id'];
	if(!$_POST){
		$sql = "select name from student where id = " . $id;
		$res = mysql_query($sql);
		$row = mysql_fetch_assoc($res);
		echo "<h1 align='center'>修改{$row['name']}同学的信息</h1>";
	}else{
		$sql = "update student set ";
		$flag = false;
		foreach ($_POST as $key => $value){
			if ($value){
				if($flag){
					$sql .= ',';
				}else{
					$flag = true;
				}
				$sql .= ($key . "='" . $value . "'");
			}
		}
		$sql .= " where id = $id";
		echo $sql."<br>";
		$res = mysql_query($sql);
		if(mysql_query($sql)){
			echo "<br>修改学生信息成功！<br><a href='index.php'>查看数据</a>";
			exit;
		}else{
			echo "<br>修改学生信息失败！<br>".mysql_error();
			exit;
		}
	}
	//echo $sql;
	//update student set name = aaa where id = 1;
?>

<form align="center" action="updateStu.php?id=<?php echo $_GET['id'];?>" method="POST">
学生姓名: <input type="text" name="name"> *若不需修改可以留空<br>
学生性别: <input type="text" name="sex"> *若不需修改可以留空<br>
学生年龄: <input type="text" name="age"> *若不需修改可以留空<br>
语文成绩: <input type="text" name="cn"> *若不需修改可以留空<br>
英语成绩: <input type="text" name="en"> *若不需修改可以留空<br>
数学成绩: <input type="text" name="math"> *若不需修改可以留空<br>
学生班级: <input type="text" name="class"> *若不需修改可以留空<br>
<input type="submit" value="修改信息">
</form>