<?php
    include 'config_mysql_connect.php';
    $link = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
    if($GLOBALS["link"]){
        echo DB_NAME."连接成功。<br/>";
    }else{
        die(DB_NAME."连接失败。<br/>原因：".mysqli_error($link));
    }




// $link;
// function link_mysql($localhost,$root,$password,$database){
//     $GLOBALS["link"] = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
//     if($GLOBALS["link"]){
//         echo DB_NAME."连接成功。<br/>";
//     }else{
//         die(DB_NAME."连接失败。<br/>原因：".mysqli_error($GLOBALS["link"]));
//     }
    
// }

// function close_mysql(){
//     $close = mysqli_close($GLOBALS["link"]);
//     if($close){
//         echo DB_NAME."关闭成功。<br/>";
//     }else{
//         die(DB_NAME."关闭失败。<br/>原因：".mysqli_error($GLOBALS["link"]));
//     }
// }

?>