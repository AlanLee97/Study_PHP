<html>
<head>
<title>�ϴ��ļ�����</title>
</head>
<body>
	<h2>�ϴ��ļ�����</h2>
    <form action="" enctype="multipart/form-data" method="post" name="uploadfile">
    	�ϴ��ļ���<input type="file" name="upfile" /><br> 
    	<input type="submit" value="�ϴ�" />
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
             * 0:�ļ��ϴ��ɹ�<br/>
             * 1���������ļ���С����php.ini�ļ�������<br/>
             * 2���������ļ��Ĵ�СMAX_FILE_SIZEѡ��ָ����ֵ<br/>
             * 3���ļ�ֻ�в��ֱ��ϴ�<br/>
             * 4��û���ļ����ϴ�<br/>
             * 5���ϴ��ļ���СΪ0
             */
            
            
            $error = $upfile["error"];
            echo "=========================<br>";
            echo "�ϴ��ļ��������ǣ�" . $name . "<br />";
            echo "�ϴ��ļ��������ǣ�" . $type . "<br />";
            echo "�ϴ��ļ��Ĵ�С�ǣ�" . $size . "<br />";
            echo "�ϴ��ļ�����ʱ���·���ǣ�" . $tmp_name . "<br />";
            echo "��ʼ�ƶ��ϴ��ļ�<br />";
            $destination = "up/".$name;
            move_uploaded_file($tmp_name, $destination);
            
            
            echo "=========================<br>";
            echo "�ϴ���Ϣ��<br />";
            if($error == 0){
                echo "�ļ��ϴ��ɹ�<br/>";
                echo "Ԥ��ͼƬ<br/>";
                echo "<img src='". $destination . "'>";
            }elseif ($error == 1) {
                echo "�������ļ���С����php.ini�ļ�������";
            } elseif ($error == 2) {
                echo "�������ļ��Ĵ�СMAX_FILE_SIZEѡ��ָ����ֵ";
            } elseif ($error == 3) {
                echo "�ļ�ֻ�в��ֱ��ϴ�";
            } elseif ($error == 4) {
                echo "û���ļ����ϴ�";
            } else {
                echo "�ϴ��ļ���СΪ0";
            }
                
        }else {
            echo "���ϴ�jpg,gif,png�ȸ�ʽ��ͼƬ��";
        }
    }
?> 