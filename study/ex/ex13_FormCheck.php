
<!DOCTYPE html>
<html>
<head>
    <title>PHP ����֤</title>
    <style>
        .error{
            color: red;
        }
    
    </style>
</head>
<body>

<?php
    $name = $age = $sex = $birthday = $message = "";
    $nameErr = $ageErr = $sexErr = $birthdayErr = $messageErr = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "���ֲ���Ϊ��";
            $id = 1;
        }else{
            $name = input($_POST["name"]);
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["sex"])){
                $sexErr = "�Ա���Ϊ��";
                $id = 2;
            }else{
                $sex = input($_POST["sex"]);
            }
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["birthday"])){
                $birthdayErr = "���ղ���Ϊ��";
                $id = 3;
            }else{
                $birthday = input($_POST["birthday"]);
            }
        }
    }
    
    function input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
    
    
 
?>
    <h2>PHP ����֤</h2><br/>
    <p><span class="error">*Ϊ�����ֶ�</span></p>
    <form method="post" action="<?php 
        echo htmlspecialchars($_SERVER["PHP_SELF"]);
    ?>">
        <p>����</p><input type="text" name="name"/><span class="error">*<?php  echo $nameErr;?></span>
        <p>����</p><input type="text" name="age"/>
        <p>�Ա�</p><input type="text" name="sex"/><span class="error">*<?php echo $sexErr;?></span>
        <p>����</p><input type="text" name="birthday"/><span class="error">*<?php echo $birthdayErr;?></span>
        <p>��ע</p><input type="text" name="message"/>
        <br><input type="submit" value="�ύ">
    </form>
</body>
</html>




