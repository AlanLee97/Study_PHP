<!DOCTYPE html>
<html>
	<head>
		<title>表单验证</title>
	</head>
	<body>
		<form action="" method="post">
			<input type="text" name="username"/>
			<input type="password" name="pwd"/>
			<input type="submit" name="提交"/>
		</form>
	</body>
</html>

<?php
    var_dump($_POST["username"]);
    var_dump($_POST["pwd"]);

?>