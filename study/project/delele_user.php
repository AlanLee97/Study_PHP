<?php
    $link = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
    if($GLOBALS["link"]){
        echo DB_NAME."���ӳɹ���<br/>";
    }else{
        die(DB_NAME."����ʧ�ܡ�<br/>ԭ��".mysqli_error($link));
    }

    if(is_array($_POST["id"])){
        $id = join(",", $_POST["id"]);
    }elseif(is_numeric($_GET["id"])){
        $id = (int)$_GET["id"];
    }else{
        echo "���ݲ��Ϸ�";
        exit;
    }
        
    $sql_delete = "delete from register where id in ({$id})";
    $result_delete = mysqli_query($link, $sql_delete);
    if($result_delete){
        echo "id = {$id} ɾ���ɹ�";
    }else{
        echo "ɾ��ʧ��";
    }
?>