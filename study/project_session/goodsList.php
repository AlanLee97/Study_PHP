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
   //ȡ����Ʒ��Ϣ��ʾ��ҳ���ϣ�����ӹ�����
       foreach ($goods as $value) {
           echo "��Ʒ��: " . $value['gname'] . " <br/> �۸� : " .$value["price"]."<br/>";
           echo "<a class='blue' href='buy.php?gname=". $value['gname'] ."&price=".$value["price"]."'>����</a>";
           echo "<br/>";
       }
   ?>
   <a class='blue' href="shoppingCart.php">�鿴���ﳵ</a>
</body>
</html>