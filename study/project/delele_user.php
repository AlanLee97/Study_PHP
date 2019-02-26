<?php
    $link = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
    if($GLOBALS["link"]){
        echo DB_NAME."连接成功。<br/>";
    }else{
        die(DB_NAME."连接失败。<br/>原因：".mysqli_error($link));
    }

    if(is_array($_POST["id"])){
        $id = join(",", $_POST["id"]);
    }elseif(is_numeric($_GET["id"])){
        $id = (int)$_GET["id"];
    }else{
        echo "数据不合法";
        exit;
    }
        
    $sql_delete = "delete from register where id in ({$id})";
    $result_delete = mysqli_query($link, $sql_delete);
    if($result_delete){
        echo "id = {$id} 删除成功";
    }else{
        echo "删除失败";
    }
?>