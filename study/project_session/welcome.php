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
   <p>有以下操作：</p>
   <a class='blue' href="goodsList.php"> 商品列表 </a>
   <a class='blue' href="shoppingCart.php"> 购物车 </a>
</body>
</html>