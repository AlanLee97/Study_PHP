<?php
    namespace MyProject{
        const CONNECT_OK = 1;
        class MyClass{
            function myFunction(){
                echo "MyClass ---> myFunction()";
            }
        }
        
        function Myfunction2(){
            echo "namespace MyProject --> Myfunction2()";
        }
    }

    //2. ��ȫ�ֵķ������ռ��еĴ����������ռ��еĴ��������һ��
    //ֻ��ʹ�ô�������ʽ���﷨��ȫ�ִ��������һ���������Ƶ� namespace �����ϴ�����������
    namespace {
        session_start();
        $a = MyProject\Myfunction2();
        echo $a;
        
        echo MyProject\MyClass::myFunction();
        
        use FenGeFu;
        \FenGeFu\fenGeFu();
    }
    
    //3. �������ռ�
    namespace Mynamespace\subnamesapce1\subnamespace2{
        echo "�������ռ�";
    }
    
    namespace FenGeFu{
        function fenGeFu(){
            echo "<br>========================�ָ���==========================<br>";
        }
    }
?>