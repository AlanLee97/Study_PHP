
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

//��session�е���Ʒ��Ϣ(�����ﳵ�е���Ʒ)���ܼ���ʾ��ҳ��
$goods = $_SESSION['goods'];
echo '������:<br />';
echo "<table width='800' border='1'>";
echo "<tr><td>��Ʒ����</td><td>�۸�</td><td>����</td></tr>";
foreach ($goods as $value) {
   echo "<tr>";
   echo "<td>" . @$value['gname'] ."</td>";
   echo "<td>" . @$value['price'] ."</td>";
   echo "<td>" . $value['number'] ."</td>";
   echo "</tr>";
}

echo '<tr ><td colspan="3"> �ܼۣ�' . $_SESSION['totalPrice'] . '</td></tr>';
echo "</table>";
?>
<a class='blue' href="goodsList.php">������Ʒ�б�</a>
</body>
</html>