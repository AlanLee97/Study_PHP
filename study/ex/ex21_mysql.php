<?php
/*��һ��:  �������ݿ������
    ����	˵��
    ����	mysqli_connect
    ����	���ӵ�mysql���ݿ������
    ����1	����
    ����2	���ݿ��������½��
    ����3	����
    ����4	���ݿ������
    ����5	���ݿ�������˿ڲ���Ĭ��3306
    ������4�����ݿ������ڴ˲�����񣬲���Ҫִ�е�������
*/

    //1. �������ݿ�
    $con = mysqli_connect("localhost","root","123456");
    
    //2. �жϴ���
    if($con){
        echo "���ݿ����ӳɹ�<br />";
    }else {
        die("�޷����ӵ����ݿ�<br />".mysqli_error());
    }
    
    //3. ѡ�����ݿ�
    $database = "phptest";
    mysqli_select_db($con, $database);
    
    //4. �����ַ���
    $charset = "utf-8";
    mysqli_set_charset($con, $charset);
    
    //5. ׼��sql���
    //$sql_insert = "INSERT INTO 'study'('name', 'id', age', 'sex') VALUES ('li',1000,22,'��')";
    $sql_select = "SELECT * FROM {$database}.study";
    
    //6. ִ��sql���
    $query_result = mysqli_query($con, $sql_select);
    
    //7. �ж��Ƿ�ִ���������߱�������
    if($query_result){
        echo "ִ��sql���ɹ�<br>";
        if(mysqli_num_rows($query_result) > 0){
            while($row = mysqli_fetch_assoc($query_result)){
                echo "name: ".$row["name"]."<br />";
                echo "id: ".$row["id"]."<br />";
                echo "age: ".$row["age"]."<br />";
                echo "sex: ".$row["sex"]."<br />";
            }
        }else{
            echo "0���";
        }
        
    }else{
        echo "ִ��sql���ʧ��<br>".mysqli_error($con);
    }
    
    //8. �ر����ݿ�
    mysqli_close($con);
    
    
    
    
    
    
    
    
    
    
    
?>