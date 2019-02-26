<html>
<head>
<title>上传文件测试</title>
</head>
<body>
	<h2>上传文件测试</h2>
    <form action="" enctype="multipart/form-data" method="post" name="uploadfile">
    	上传文件：<input type="file" name="upfile" /><br> 
    	<input type="submit" value="上传" />
    </form>
</body>
</html>
<?php
    if(is_uploaded_file($_FILES["upfile"]["tmp_name"])){
        $upfile = $_FILES["upfile"];
        $name = $upfile["name"];
        $type = $upfile["type"];
        $size = $upfile["size"];
        $tmp_name = $upfile["tmp_name"];
        
        switch ($type){
            case "image/pjpeg":
                $okType = true;
                break;
            case "image/jpeg":
                $okType = true;
                break;
            case "image/gif":
                $okType = true;
                break;
            case "image/png":
                $okType = true;
                break;
        }
        
        if($okType){
            /**
             * 0:文件上传成功<br/>
             * 1：超过了文件大小，在php.ini文件中设置<br/>
             * 2：超过了文件的大小MAX_FILE_SIZE选项指定的值<br/>
             * 3：文件只有部分被上传<br/>
             * 4：没有文件被上传<br/>
             * 5：上传文件大小为0
             */
            
            
            $error = $upfile["error"];
            echo "=========================<br>";
            echo "上传文件的名称是：" . $name . "<br />";
            echo "上传文件的类型是：" . $type . "<br />";
            echo "上传文件的大小是：" . $size . "<br />";
            echo "上传文件的临时存放路径是：" . $tmp_name . "<br />";
            echo "开始移动上传文件<br />";
            $destination = "up/".$name;
            move_uploaded_file($tmp_name, $destination);
            
            
            echo "=========================<br>";
            echo "上传信息：<br />";
            if($error == 0){
                echo "文件上传成功<br/>";
                echo "预览图片<br/>";
                echo "<img src='". $destination . "'>";
            }elseif ($error == 1) {
                echo "超过了文件大小，在php.ini文件中设置";
            } elseif ($error == 2) {
                echo "超过了文件的大小MAX_FILE_SIZE选项指定的值";
            } elseif ($error == 3) {
                echo "文件只有部分被上传";
            } elseif ($error == 4) {
                echo "没有文件被上传";
            } else {
                echo "上传文件大小为0";
            }
                
        }else {
            echo "请上传jpg,gif,png等格式的图片！";
        }
    }
?> 