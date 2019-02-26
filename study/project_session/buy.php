
<html>
<head>
</head>
<body>
<?php
   //获取传过来的商品名和价格
   $gname = $_GET["gname"];
   $price = $_GET["price"];

   //把session中的商品信息和传过来的(刚买的)商品信息对比
   $goods = $_SESSION['goods'];

   if ($gname != $goods[$gname]['gname']) {
       //第一次买的话，将相应的商品信息添加到session中
       $goods[$gname]['gname'] = $gname;
       $goods[$gname]['price'] = $price;
       $goods[$gname]['number'] += 1;
       $_SESSION['totalPrice'] += $price;
       
   } else {
       //买过的话，则总价格增加，相应商品数量增加
       $_SESSION['totalPrice'] += $price;
       $goods[$gname]['number'] += 1;
   }

   $_SESSION['goods'] = $goods;
   //购买处理完毕后跳转到商品列表
   header('location: goodsList.php');
?>
</body>
</html>