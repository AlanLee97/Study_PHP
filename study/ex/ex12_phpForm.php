<!-- php�� -->
 
<html>
<head>
	<title>php��</title>
</head>
	
<body>
	<form action="" method="post">
		<input type="text" name="user">
		<input type="password" name="pwd">
		<input type="submit" value="�ύ">
	</form>
	<?php 
    	echo $_POST["user"]."<br>";
    	echo $_POST["pwd"]."<br>";
	?>
	
	<!-- �ָ��� -->
	<br><br>
	<p>================�ָ���=====================</p>
	<br><br>
	
	<h2>��ѡ��</h2>
	<form action="" method="get">
		<select name="location">
			<option type="radio" value="">ѡ��һ���ص�</option>
			<option type="radio" value="guangzhou">����</option>
			<option type="radio" value="shenzheng">����</option>
			<option type="radio" value="shaoguan">�ع�</option>
		</select>
		
		<input type="submit" value="�ύ">
	</form>
<?php
    $radio = isset($_GET["location"])?htmlspecialchars($_GET["location"]):"";
    if($radio){
        switch ($radio){
            case "guangzhou":
                echo "��ѡ����ǹ���";
                break;
            case "shenzheng":
                echo "��ѡ���������";
                break;
            case "shaoguan":
                echo "��ѡ������ع�";
                break;
                default:
                    echo "��û��ѡ��ص�";
                    break;
        }
    }
?>
	
	
	<!-- �ָ��� -->
	<br><br>
	<p>================�ָ���=====================</p>
	<br><br>
	
	<h2>��ѡ��</h2>
	<form action="" method="post">
		<p>ѡ��һ���ص�</p>
		<input type="checkbox" value="guangzhou" name="locations[]">����
		<input type="checkbox" value="shenzheng" name="locations[]">����
		<input type="checkbox" value="shaoguan" name="locations[]">�ع�
		
		<br>
		<input type="submit" value="�ύ">
	</form>
<?php 
$checkbox = isset($_POST["locations"]) ? $_POST["locations"]:"";
if($checkbox){
    $arr_loca = array(
        "guangzhou" => "��ѡ��ĵص��ǹ���",
        "shenzheng" => "��ѡ��ĵص�������",
        "shaoguan" => "��ѡ��ĵص����ع�"
    );
    
    foreach ($checkbox as $index){
        echo $arr_loca[$index]."<br>";
    }
}

?>
	
</body>

</html>

 
 

