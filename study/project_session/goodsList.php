<?php
    $goods = array();
    $i = 0;
    $link = mysqli_connect("localhost","root","123456","login");
    $sql_select = "select * from shop";
    @$result_select = mysqli_query($link, $sql_select);
    $row = mysqli_fetch_assoc($result_select);
    while ($row = mysqli_fetch_assoc($result_select)){
        $goods[$i]["id"] = $row["id"];
        $goods[$i]["gname"] = $row["gname"];
        $goods[$i]["price"] = $row["price"];
        $i++;
    }
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
   <?php
   //取出商品信息显示在页面上，并添加购买功能
       foreach ($goods as $value) {
           echo "商品名: " . $value['gname'] . " <br/> 价格 : " .$value["price"]."<br/>";
           echo "<a class='blue' href='buy.php?gname=". $value['gname'] ."&price=".$value["price"]."'>购买</a>";
           echo "<br/>";
       }
   ?>
   <a class='blue' href="shoppingCart.php">查看购物车</a>
</body>
</html>