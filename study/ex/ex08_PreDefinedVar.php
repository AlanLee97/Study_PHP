<html>
    <head>
    	<title>表单</title>
    </head>
    <body>
    	<form action="" method="post">
    		<input type="text" name="user" />
    		<input type="password" name="pwd" />
    		<input type="submit" name="提交" />
    	</form>
    </body>
</html>

<?php
    /*
     * PHP 超级全局变量(预定义变量)
     * PHP中预定义了几个超级全局变量（superglobals） ，这意味着它们在一个脚本的全部作用域中都可用。
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
    
//1. $GLOBALS   是PHP的一个超级全局变量组
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
    
    //3. PHP $_REQUEST 用于收集HTML表单提交的数据。
    echo "\$_REQUEST"."<br>";
    echo "帐号： ".$_REQUEST["user"];
    echo "<br>";
    echo "密码： ".$_REQUEST["pwd"];
    echo "<br>";
    
    //4. PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。
    echo "\$_POST"."<br>";
    echo "帐号： ".$_POST["user"];
    echo "<br>";
    echo "密码： ".$_POST["pwd"];
    echo "<br>";
    
    //5. PHP $_GET 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。
//     echo "\$_GET"."<br>";
//     echo "帐号： ".$_GET["user"];
//     echo "<br>";
//     echo "密码： ".$_GET["pwd"];
//     echo "<br>";
    
    //$_GET与$_POST不能同时使用！！！
?>


