<?php

$username = $_SESSION["username"];
?>
<html>
<head>

</head>
<style>
.blue{
	color:blue;
}
</style>
<body>
   welcome,<?php echo $username;?>
   <br>
   <p>�����²�����</p>
   <a class='blue' href="goodsList.php"> ��Ʒ�б� </a>
   <a class='blue' href="shoppingCart.php"> ���ﳵ </a>
</body>
</html>