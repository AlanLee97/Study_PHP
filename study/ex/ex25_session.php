<?php
session_start();
$_SESSION["name"] = "nibuguai";

//销毁session
//unset($_SESSION["name"]);   //销毁指定的会话
//session_destroy();  //销毁全部会话

?>

<html>
<body>
<?php 
echo "name = " . $_SESSION["name"];
?>

</body>


</html>