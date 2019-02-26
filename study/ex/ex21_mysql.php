<?php
/*第一步:  连接数据库服务器
    类型	说明
    函数	mysqli_connect
    功能	连接到mysql数据库服务器
    参数1	主机
    参数2	数据库服务器登陆名
    参数3	密码
    参数4	数据库的名称
    参数5	数据库服务器端口不填默认3306
    若参数4，数据库名称在此步已填并择，不需要执行第三步。
*/

    //1. 连接数据库
    $con = mysqli_connect("localhost","root","123456");
    
    //2. 判断错误
    if($con){
        echo "数据库连接成功<br />";
    }else {
        die("无法连接到数据库<br />".mysqli_error());
    }
    
    //3. 选择数据库
    $database = "phptest";
    mysqli_select_db($con, $database);
    
    //4. 设置字符集
    $charset = "utf-8";
    mysqli_set_charset($con, $charset);
    
    //5. 准备sql语句
    //$sql_insert = "INSERT INTO 'study'('name', 'id', age', 'sex') VALUES ('li',1000,22,'男')";
    $sql_select = "SELECT * FROM {$database}.study";
    
    //6. 执行sql语句
    $query_result = mysqli_query($con, $sql_select);
    
    //7. 判断是否执行正常或者遍历数据
    if($query_result){
        echo "执行sql语句成功<br>";
        if(mysqli_num_rows($query_result) > 0){
            while($row = mysqli_fetch_assoc($query_result)){
                echo "name: ".$row["name"]."<br />";
                echo "id: ".$row["id"]."<br />";
                echo "age: ".$row["age"]."<br />";
                echo "sex: ".$row["sex"]."<br />";
            }
        }else{
            echo "0结果";
        }
        
    }else{
        echo "执行sql语句失败<br>".mysqli_error($con);
    }
    
    //8. 关闭数据库
    mysqli_close($con);
    
    
    
    
    
    
    
    
    
    
    
?>