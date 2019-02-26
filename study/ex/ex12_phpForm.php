<!-- php表单 -->
 
<html>
<head>
	<title>php表单</title>
</head>
	
<body>
	<form action="" method="post">
		<input type="text" name="user">
		<input type="password" name="pwd">
		<input type="submit" value="提交">
	</form>
	<?php 
    	echo $_POST["user"]."<br>";
    	echo $_POST["pwd"]."<br>";
	?>
	
	<!-- 分割线 -->
	<br><br>
	<p>================分割线=====================</p>
	<br><br>
	
	<h2>单选框</h2>
	<form action="" method="get">
		<select name="location">
			<option type="radio" value="">选择一个地点</option>
			<option type="radio" value="guangzhou">广州</option>
			<option type="radio" value="shenzheng">深圳</option>
			<option type="radio" value="shaoguan">韶关</option>
		</select>
		
		<input type="submit" value="提交">
	</form>
<?php
    $radio = isset($_GET["location"])?htmlspecialchars($_GET["location"]):"";
    if($radio){
        switch ($radio){
            case "guangzhou":
                echo "你选择的是广州";
                break;
            case "shenzheng":
                echo "你选择的是深圳";
                break;
            case "shaoguan":
                echo "你选择的是韶关";
                break;
                default:
                    echo "你没有选择地点";
                    break;
        }
    }
?>
	
	
	<!-- 分割线 -->
	<br><br>
	<p>================分割线=====================</p>
	<br><br>
	
	<h2>多选框</h2>
	<form action="" method="post">
		<p>选择一个地点</p>
		<input type="checkbox" value="guangzhou" name="locations[]">广州
		<input type="checkbox" value="shenzheng" name="locations[]">深圳
		<input type="checkbox" value="shaoguan" name="locations[]">韶关
		
		<br>
		<input type="submit" value="提交">
	</form>
<?php 
$checkbox = isset($_POST["locations"]) ? $_POST["locations"]:"";
if($checkbox){
    $arr_loca = array(
        "guangzhou" => "你选择的地点是广州",
        "shenzheng" => "你选择的地点是深圳",
        "shaoguan" => "你选择的地点是韶关"
    );
    
    foreach ($checkbox as $index){
        echo $arr_loca[$index]."<br>";
    }
}

?>
	
</body>

</html>

 
 

