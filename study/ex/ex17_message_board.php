<html>
<head>
<title>ÁôÑÔ°åÁ·Ï°</title>
<style type="text/css">

.box{
	background:#ffff99;
	margin-left:auto;
	margin-right:auto;
	width:500px;
	height:auto;
	border-radius:15px;
	padding:10%;
	position:relative;
}

.center{
	text-align:center;
}


.content{
	background:rgba(227,227,227,0.30);;
	padding:10px;
	width:80%;
	height:auto;
	margin-left:auto;
	margin-right:auto;
    border-radius:10px;
	position:relative;
}

.who{
	float:left;
}

.time{
	float:right;
}


</style>

<?php
    $name = $_POST["name"];
    $time = date("Y-m-d H:i:s");
    $content = $_POST["content"];


?>


</head>
<body>
	<div class="box">
		<div class="content">
			<h2 class="center">ÁôÑÔ°å</h2><br/>
        	<form action="" method="post">
        		<label>ÄãµÄÃû×Ö£º</label><input type="text" name="name"><br/><br/>
        		<label>ÁôÑÔÄÚÈİ£º</label><textarea name="content" rows="10" cols="50"></textarea><br/><br/>
        		<div class="center"><input type="submit" value="Ìá½»"></div><br/><br/>
        	</form>
		</div><br>
		<form action="" method="post">
    		<div class="content">
    			<label name="who" class="who"><?php echo $name;?></label>
    			<label name="time" class="time"><?php echo $time;?></label>
    			<br>
    			<p name="content"><?php echo $content;?></p>
    		</div>
		</form>
	</div>
</body>
</html>



