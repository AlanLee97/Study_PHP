<?php
    include 'project/connect_mysql.php'; 

    //link_mysql(DB_HOST, DB_USER, DB_PWD, DB_NAME);
    $table_name = "register";
    $sql_count = "select count(id) as c from {$table_name}";
    
    $result_count = mysqli_query($link, $sql_count);
    $data = mysqli_fetch_assoc($result_count);
    $count = $data['c'];

    $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
    $page_num = 5;
    $total = ceil($count / $page_num);
    if($page <= 1){
        $page = 1;
    }
    if($page >= $total){
        $page = $total;
    }
    
    
    $offset = ($page -1) * $page_num;
    $sql_select = "select id,username,password,time,ip from {$table_name} ". 
    "order by id asc limit {$offset},{$page_num}";
    $result = mysqli_query($link, $sql_select);
    if($result && mysqli_num_rows($result)){
        echo "<table width='800' border='1'>";
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["password"]."</td>";
            echo "<td>".$row["time"]."</td>";
            echo "<td>".$row["ip"]."</td>";
            echo "<td>". "<a href='#'>�༭�û�</a>" ."</td>";
            echo "<td>". "<a href='?id=".$row["id"]."'>ɾ���û�</a>" ."</td>";
            echo "</tr>";
        }
        echo "</tr><td colspan='7'>";
        echo "<a href='ex23_admin_user.php?page=1'>��ҳ</a>";
        echo "<a href='ex23_admin_user.php?page=".($page - 1)."'>��һҳ</a>";
        echo "<a href='ex23_admin_user.php?page=".($page + 1)."'>��һҳ</a>";
        echo "<a href='ex23_admin_user.php?page={$total}'>βҳ</a>";
        echo " ��ǰ�ǵ�".$page."ҳ ��".$total."ҳ";
        echo "</td></tr>";
    }else {
        echo "û������";
    }
    
    
    
    function fsql_delete(){
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
        
    }
    
?>









<!-- 
<html>
<head>
<title>�û���ҳ</title>
</head>
<table>
	<tr></tr>
	<tr></tr>
	<tr></tr>
</table>


</html> -->