<?php
    //���ִ�Сд
    define("MYNAME","nibuguai");
    echo MYNAME;
    echo "<br>";
    //echo myname;   �ᱨ��
    
    //�����ִ�Сд
    define("MYNAME","nibuguai",true);
    echo MYNAME;
    echo "<br>";
    echo "�ҵ�������".MYNAME;
    
    echo myname;
    echo "<br>";
    
    define("NUM",22);
    echo NUM;
    echo "<br>";
    
    define("FLOAT",23.3);
    echo FLOAT;
    echo "<br>";
    
    echo "<br>";
    //�ɱ����
    $var1 = 'x';
    $x = 'y';
    $z = $$var1;
    echo $z;
?>