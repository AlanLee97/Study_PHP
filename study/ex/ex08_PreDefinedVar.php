<html>
    <head>
    	<title>��</title>
    </head>
    <body>
    	<form action="" method="post">
    		<input type="text" name="user" />
    		<input type="password" name="pwd" />
    		<input type="submit" name="�ύ" />
    	</form>
    </body>
</html>

<?php
    /*
     * PHP ����ȫ�ֱ���(Ԥ�������)
     * PHP��Ԥ�����˼�������ȫ�ֱ�����superglobals�� ������ζ��������һ���ű���ȫ���������ж����á�
     * $GLOBALS
     * $_SERVER
     * $_REQUEST
     * $_POST
     * $_GET
     * $_FILES
     * $_ENV
     * $_COOKIE
     * $_SESSION 
     */
    
//1. $GLOBALS   ��PHP��һ������ȫ�ֱ�����
    $x = 2;
    $y = 3;
    $z = null;
    
    function f1(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    f1();
    echo $z;
    echo "<br>";
    
    //2. $_SERVER
    echo 'PHP_SELF : '.$_SERVER['PHP_SELF'];
    echo "<br>";
    echo 'SERVER_NAME : '.$_SERVER['SERVER_NAME'];
    echo "<br>";
    echo 'HTTP_HOST : '.$_SERVER['HTTP_HOST'];
    echo "<br>";
    echo 'HTTP_REFERER : '.$_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo 'HTTP_USER_AGENT : '.$_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo 'SCRIPT_NAME : '.$_SERVER['SCRIPT_NAME'];
    echo "<br>";
    
    //3. PHP $_REQUEST �����ռ�HTML���ύ�����ݡ�
    echo "\$_REQUEST"."<br>";
    echo "�ʺţ� ".$_REQUEST["user"];
    echo "<br>";
    echo "���룺 ".$_REQUEST["pwd"];
    echo "<br>";
    
    //4. PHP $_POST ���㷺Ӧ�����ռ������ݣ���HTML form��ǩ��ָ�������ԣ�"method="post"��
    echo "\$_POST"."<br>";
    echo "�ʺţ� ".$_POST["user"];
    echo "<br>";
    echo "���룺 ".$_POST["pwd"];
    echo "<br>";
    
    //5. PHP $_GET ���㷺Ӧ�����ռ������ݣ���HTML form��ǩ��ָ�������ԣ�"method="post"��
//     echo "\$_GET"."<br>";
//     echo "�ʺţ� ".$_GET["user"];
//     echo "<br>";
//     echo "���룺 ".$_GET["pwd"];
//     echo "<br>";
    
    //$_GET��$_POST����ͬʱʹ�ã�����
?>


