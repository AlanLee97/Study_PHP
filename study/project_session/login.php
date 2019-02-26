<?php
    if((@$_POST["username"] != null) && (@$_POST["password"])){
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        
        $link = mysqli_connect("localhost","root","123456","login");
        $sql_select = "select * from user where username = '{$username}'";
        $result_select = mysqli_query($link, $sql_select);
        $row = mysqli_fetch_assoc($result_select);
        if($row["password"] == $_POST["password"]){
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location:welcome.php");
        }
    }
    
?>

<html>
<head>
<!-- 这里指明页面编码 -->

</head>
<body>
   <form action="" method="POST">
       <div>
           用户名：<input type="text" name="username" />
           密  码：<input type="text" name="password" />
           <input type="submit" value="登录">        
       </div>
   </form>
</body>
</html>