<?php
    //1. 类
    //类的变量使用 var 来声明, 变量也可以初始化值。
    class MyClass{
        var $name = "nibuguai";     //如果用 var 定义，则被视为公有public
        var $age = 21;
        
        
        /*
         * 由于PHP是弱类型语言，因此函数的输入参数类型无法确定（可以使用类型暗示，
         * 但是类型暗示无法用在诸如整型，字符串之类的标量类型上），并且对于一个函数，
         * 比如只定义了3个输入参数，PHP却运行调用的时候输入4个或者更多的参数。
         * 因此基于这2点，注定了PHP中无法重载函数，（类似Javascript语言），也无法有构造函数的重载。
         * 
         */
        function __construct($name1,$age1){
            $this->name = $name1;           //箭头指向的变量不需要$
            $this->age = $age1;
            echo "有参数的构造函数"."<br>";
        }
        
        function __destruct(){
            echo "执行了析构函数"."<br>";
        }
        
        
        
        /**
         * @return the $name
         */
        public function getName()
        {
            return $this->name;
        }
    
        /**
         * @return the $age
         */
        public function getAge()
        {
            return $this->age;
        }
    
        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }
    
        /**
         * @param number $age
         */
        public function setAge($age)
        {
            $this->age = $age;
        }
        
        public function other(){
            echo "等下我要重写这个函数";
        }
    
    }
    
    $myClass = new MyClass("李步官", 22);
    $myClass->setName("你不乖");
    $myClass->setAge(21);
    echo $myClass->getName()."<br>";
    echo $myClass->getAge()."<br>";
    
    $myClass2 = new MyClass("李步官", 22);
    echo $myClass2->getName()."<br>";
    echo $myClass2->getAge()."<br>";
    
    
    class MySubClass extends MyClass{
        var $sex;
        function setSex($sex){
            $this->sex = $sex;
        }
        
        function getSex(){
            return $this->sex;
        }
        
        //重写父类的方法
        public function other(){
            echo "我重写了父类的other函数<br>";
        }
    }
    
    $mySubClass = new MySubClass("李步官", 22);
    echo $mySubClass->name."<br>";
    echo $mySubClass->age."<br>";
    echo $mySubClass->sex."<br>";
    echo $mySubClass->other();
    
    
    
    
    
    
    
    
    
    //2. 接口
    interface ImyInterface{
        public function myFunction1($name,$age);
        
        public function myFunction2($name,$age,$sex);
    }
    
    //实现接口
    class MyClass3 implements ImyInterface{
        public $name,$age,$sex;
        public function myFunction1($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
        public function myFunction2($name, $age,$sex){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }
    }
    echo "有没有执行到这一句？<br>";
    $myClass3 = new MyClass3();
    $myClass3->myFunction1("nibuguai",22)."<br>";
    $myClass3->myFunction2("nibuguai",22,"男")."<br>";
    echo $myClass3->name."<br>";
    echo $myClass3->age."<br>";
    echo $myClass3->sex."<br>";
    
    
    
    //3. 常量
    class MyClass4{
        const str_constant = "常量值";
        const int_constant = 10;
        
        function showConstant(){
            echo self::str_constant."<br>";
            echo self::int_constant."<br>";
        }
    }
    
    echo MyClass4::str_constant."<br>";
    
    $className = "MyClass4";
    echo "echo $className::int_constant: ".$className::int_constant."<br>";   // 自 5.3.0 起
    
    
    
    //4. 抽象类
    abstract class AbstractClass{
        abstract public function myFunction3();
        abstract public function myFunction4($name);
        
        public function myFunction5(){
            echo "function myFunction5()";
        }
    }
    
    class MyClass5 extends AbstractClass{
        public function myFunction3(){
            echo "实现function myFunction3()<br>";
        }
        
        public function myFunction4($name){
            echo "实现function myFunction4()<br>";
        }
    }
    
    $myClass5 = new MyClass5();
    echo $myClass5->myFunction3();
    echo $myClass5->myFunction4("nibuguai");
    
    
    
    //5. Static 关键字
    /*
     * 声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。
     * 静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。
     * 由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。
     * 静态属性不可以由对象通过 -> 操作符来访问。
     * 自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字 self，parent 或 static。
     */
    
    class Foo{
        public static $my_static = "my static var";
        
        public static function staticValue(){
            return self::$my_static;
        }
    }
    
    echo Foo::staticValue()."<br>";
    
    
    
    
    //7. 调用父类构造方法
    //PHP 不会在子类的构造方法中自动的调用父类的构造方法。要执行父类的构造方法，需要在子类的构造方法中调用 parent::__construct() 。
    class BaseClass{
        function __construct(){
            echo "BaseClass 类中构造方法<br>";
        }
    }
    
    class SubClass extends BaseClass{
        function __construct(){
            parent::__construct();
            echo "SubClass 类中构造方法<br>";
        }
    }
    
    $subClass = new SubClass();
    
    
    
    
    
    
    
?>