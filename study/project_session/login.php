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
<!-- ����ָ��ҳ����� -->

</head>
<body>
   <form action="" method="POST">
       <div>
           �û�����<input type="text" name="username" />
           ��  �룺<input type="text" name="password" />
           <input type="submit" value="��¼">        
       </div>
   </form>
</body>
</html>