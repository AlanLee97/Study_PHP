<?php
    $username = trim($_POST["username"]);
    $password = md5(trim($_POST["password"]));
    $repassword = $password;
    $time = date("Y-m-d H:i:s",time());
    $ip = ip2long($_SERVER['REMOTE_ADDR']);
    
    $localhost = "localhost";
    $root = "root";
    $db_pwd = "123456";
    $database = "phptest";
    
    //连接数据库
    $link = mysqli_connect($localhost,$root,$db_pwd,$database);
    if($link){
        echo "{$database}连接成功<br/>";
    }else {
        die("{$database}连接失败".mysqli_error($link)."<br />");
    }
    
    //设置字符集
    $charset = "utf8";
    mysqli_set_charset($link, $charset);
    
    //操作数据库
    $table_name = "register";
    $sql_insert = "INSERT INTO {$table_name}(username, password, time, ip) 
VALUES ('{$username}','{$password}','{$time}','{$ip}')";
    
    $query_result = mysqli_query($link, $sql_insert);
    if($query_result){
        echo "插入数据成功<br/>";
    }else{
        echo "插入数据失败".mysqli_error($link)."<br/>";
    }
    echo '当前用户插入的ID为'.mysqli_insert_id($link)."<br/>";
    mysqli_close($link);
    echo "{$database}数据库已关闭";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>