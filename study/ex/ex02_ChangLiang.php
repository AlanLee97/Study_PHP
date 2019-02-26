<?php
    //区分大小写
    define("MYNAME","nibuguai");
    echo MYNAME;
    echo "<br>";
    //echo myname;   会报错
    
    //不区分大小写
    define("MYNAME","nibuguai",true);
    echo MYNAME;
    echo "<br>";
    echo "我的名字是".MYNAME;
    
    echo myname;
    echo "<br>";
    
    define("NUM",22);
    echo NUM;
    echo "<br>";
    
    define("FLOAT",23.3);
    echo FLOAT;
    echo "<br>";
    
    echo "<br>";
    //可变变量
    $var1 = 'x';
    $x = 'y';
    $z = $$var1;
    echo $z;
?>