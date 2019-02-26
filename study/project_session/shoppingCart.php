
<html>
<head>
</head>
<style>
.blue{
	color:blue;
}
</style>
<body>
<?php

//将session中的商品信息(即购物车中的商品)和总价显示到页面
$goods = $_SESSION['goods'];
echo '您买了:<br />';
echo "<table width='800' border='1'>";
echo "<tr><td>商品名称</td><td>价格</td><td>数量</td></tr>";
foreach ($goods as $value) {
   echo "<tr>";
   echo "<td>" . @$value['gname'] ."</td>";
   echo "<td>" . @$value['price'] ."</td>";
   echo "<td>" . $value['number'] ."</td>";
   echo "</tr>";
}

echo '<tr ><td colspan="3"> 总价：' . $_SESSION['totalPrice'] . '</td></tr>';
echo "</table>";
?>
<a class='blue' href="goodsList.php">返回商品列表</a>
</body>
</html>