<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>联欣投资 | 双重豪礼大放送</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <link rel="stylesheet" href="css/style.css" />
    </head>
	<body>
		<table class="listTable">
			<tr>
				<th>姓名</th>
				<th>电话</th>
				<th>QQ</th>
			</tr>
			<?php
			include_once '../conn.php';
			$results = mysql_query("select * from user where deleted_at IS NULL");     //执行sql查询
			while($row = mysql_fetch_array($results))
			{
				echo '<tr><td>' . $row['username'] . '</td><td>' . $row['tel'] . '</td><td>' . $row['qq'] . '</td></tr>';
			}
			?>
		</table>
	</body>
</html>