<?php
    include 'config_mysql_connect.php';
    $link = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
    if($GLOBALS["link"]){
        echo DB_NAME."���ӳɹ���<br/>";
    }else{
        die(DB_NAME."����ʧ�ܡ�<br/>ԭ��".mysqli_error($link));
    }




// $link;
// function link_mysql($localhost,$root,$password,$database){
//     $GLOBALS["link"] = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
//     if($GLOBALS["link"]){
//         echo DB_NAME."���ӳɹ���<br/>";
//     }else{
//         die(DB_NAME."����ʧ�ܡ�<br/>ԭ��".mysqli_error($GLOBALS["link"]));
//     }
    
// }

// function close_mysql(){
//     $close = mysqli_close($GLOBALS["link"]);
//     if($close){
//         echo DB_NAME."�رճɹ���<br/>";
//     }else{
//         die(DB_NAME."�ر�ʧ�ܡ�<br/>ԭ��".mysqli_error($GLOBALS["link"]));
//     }
// }

?>