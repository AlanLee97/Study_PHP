<?php
session_start();
$_SESSION["name"] = "nibuguai";

//����session
//unset($_SESSION["name"]);   //����ָ���ĻỰ
//session_destroy();  //����ȫ���Ự

?>

<html>
<body>
<?php 
echo "name = " . $_SESSION["name"];
?>

</body>


</html>