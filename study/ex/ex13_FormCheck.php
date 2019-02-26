
<!DOCTYPE html>
<html>
<head>
    <title>PHP 表单验证</title>
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
            $nameErr = "名字不能为空";
            $id = 1;
        }else{
            $name = input($_POST["name"]);
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["sex"])){
                $sexErr = "性别不能为空";
                $id = 2;
            }else{
                $sex = input($_POST["sex"]);
            }
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["birthday"])){
                $birthdayErr = "生日不能为空";
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
    <h2>PHP 表单验证</h2><br/>
    <p><span class="error">*为必填字段</span></p>
    <form method="post" action="<?php 
        echo htmlspecialchars($_SERVER["PHP_SELF"]);
    ?>">
        <p>姓名</p><input type="text" name="name"/><span class="error">*<?php  echo $nameErr;?></span>
        <p>年龄</p><input type="text" name="age"/>
        <p>性别</p><input type="text" name="sex"/><span class="error">*<?php echo $sexErr;?></span>
        <p>生日</p><input type="text" name="birthday"/><span class="error">*<?php echo $birthdayErr;?></span>
        <p>备注</p><input type="text" name="message"/>
        <br><input type="submit" value="提交">
    </form>
</body>
</html>




