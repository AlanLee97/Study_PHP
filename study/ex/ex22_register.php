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
    
    //�������ݿ�
    $link = mysqli_connect($localhost,$root,$db_pwd,$database);
    if($link){
        echo "{$database}���ӳɹ�<br/>";
    }else {
        die("{$database}����ʧ��".mysqli_error($link)."<br />");
    }
    
    //�����ַ���
    $charset = "utf8";
    mysqli_set_charset($link, $charset);
    
    //�������ݿ�
    $table_name = "register";
    $sql_insert = "INSERT INTO {$table_name}(username, password, time, ip) 
VALUES ('{$username}','{$password}','{$time}','{$ip}')";
    
    $query_result = mysqli_query($link, $sql_insert);
    if($query_result){
        echo "�������ݳɹ�<br/>";
    }else{
        echo "��������ʧ��".mysqli_error($link)."<br/>";
    }
    echo '��ǰ�û������IDΪ'.mysqli_insert_id($link)."<br/>";
    mysqli_close($link);
    echo "{$database}���ݿ��ѹر�";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>