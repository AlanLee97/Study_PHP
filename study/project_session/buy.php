
<html>
<head>
</head>
<body>
<?php
   //��ȡ����������Ʒ���ͼ۸�
   $gname = $_GET["gname"];
   $price = $_GET["price"];

   //��session�е���Ʒ��Ϣ�ʹ�������(�����)��Ʒ��Ϣ�Ա�
   $goods = $_SESSION['goods'];

   if ($gname != $goods[$gname]['gname']) {
       //��һ����Ļ�������Ӧ����Ʒ��Ϣ��ӵ�session��
       $goods[$gname]['gname'] = $gname;
       $goods[$gname]['price'] = $price;
       $goods[$gname]['number'] += 1;
       $_SESSION['totalPrice'] += $price;
       
   } else {
       //����Ļ������ܼ۸����ӣ���Ӧ��Ʒ��������
       $_SESSION['totalPrice'] += $price;
       $goods[$gname]['number'] += 1;
   }

   $_SESSION['goods'] = $goods;
   //��������Ϻ���ת����Ʒ�б�
   header('location: goodsList.php');
?>
</body>
</html>