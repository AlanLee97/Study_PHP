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

    //2. 将全局的非命名空间中的代码与命名空间中的代码组合在一起，
    //只能使用大括号形式的语法。全局代码必须用一个不带名称的 namespace 语句加上大括号括起来
    namespace {
        session_start();
        $a = MyProject\Myfunction2();
        echo $a;
        
        echo MyProject\MyClass::myFunction();
        
        use FenGeFu;
        \FenGeFu\fenGeFu();
    }
    
    //3. 子命名空间
    namespace Mynamespace\subnamesapce1\subnamespace2{
        echo "子命名空间";
    }
    
    namespace FenGeFu{
        function fenGeFu(){
            echo "<br>========================分隔符==========================<br>";
        }
    }
?>