<?php
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $link = mysqli_connect("localhost","root","123456","login");
//     $sql_insert = "insert into user(username,password) values ('{$username}','{$password}')";
//     $result_insert = mysqli_query($link, $sql_insert);
    


    if(($_POST["username"] != null) && ($_POST["password"] != null)){
        $username = $_POST["username"];
        $password = md5(trim($_POST["password"]));
        
        $link = mysqli_connect("localhost","root","123456","login");
        $sql_select = "select * from user where username = '{$username}'";
        $result_select = mysqli_query($link, $sql_select);
        $row = mysqli_fetch_assoc($result_select);
        //echo "???????????????";
        if($row["password"]  == $_POST["password"]){
            
            setcookie("cookie_username",$username,time() + 60 * 60 * 24 * 30);
            setcookie("cookie_password",$password,time() + 60 * 60 * 24 * 30);
            header('Location: welcome.php' . "?username={$username}");
        }
    }
    
    
    if(($_COOKIE["username"] != null) && ($_COOKIE["password"] != null)){
        $username = $_POST["username"];
        $password = md5(trim($_POST["password"]));
        
        $link = mysqli_connect("localhost","root","123456","login");
        $sql_select = "select * from user where username = '{$username}'";
        $result_select = mysqli_query($link, $sql_select);
        $row = mysqli_fetch_assoc($link,$result_select);
        if($row["password"] == $_POST["password"]){
            header('Location: welcome.php' . "?username={$username}");
        }
    }
?>

<html>
<head></head>
<title></title>
<body>
<form action="" method="POST">
    <div>
        ำรปงร๛ฃบ<input type="text" name="username" />
        รÜ  ย๋ฃบ<input type="text" name="password" />
        <input type="submit" value="ตวยผ">
    </div>
</form>
</body>
</html>



