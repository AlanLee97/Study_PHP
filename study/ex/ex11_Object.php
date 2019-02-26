<?php
    //1. ��
    //��ı���ʹ�� var ������, ����Ҳ���Գ�ʼ��ֵ��
    class MyClass{
        var $name = "nibuguai";     //����� var ���壬����Ϊ����public
        var $age = 21;
        
        
        /*
         * ����PHP�����������ԣ���˺�����������������޷�ȷ��������ʹ�����Ͱ�ʾ��
         * �������Ͱ�ʾ�޷������������ͣ��ַ���֮��ı��������ϣ������Ҷ���һ��������
         * ����ֻ������3�����������PHPȴ���е��õ�ʱ������4�����߸���Ĳ�����
         * ��˻�����2�㣬ע����PHP���޷����غ�����������Javascript���ԣ���Ҳ�޷��й��캯�������ء�
         * 
         */
        function __construct($name1,$age1){
            $this->name = $name1;           //��ͷָ��ı�������Ҫ$
            $this->age = $age1;
            echo "�в����Ĺ��캯��"."<br>";
        }
        
        function __destruct(){
            echo "ִ������������"."<br>";
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
            echo "������Ҫ��д�������";
        }
    
    }
    
    $myClass = new MyClass("���", 22);
    $myClass->setName("�㲻��");
    $myClass->setAge(21);
    echo $myClass->getName()."<br>";
    echo $myClass->getAge()."<br>";
    
    $myClass2 = new MyClass("���", 22);
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
        
        //��д����ķ���
        public function other(){
            echo "����д�˸����other����<br>";
        }
    }
    
    $mySubClass = new MySubClass("���", 22);
    echo $mySubClass->name."<br>";
    echo $mySubClass->age."<br>";
    echo $mySubClass->sex."<br>";
    echo $mySubClass->other();
    
    
    
    
    
    
    
    
    
    //2. �ӿ�
    interface ImyInterface{
        public function myFunction1($name,$age);
        
        public function myFunction2($name,$age,$sex);
    }
    
    //ʵ�ֽӿ�
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
    echo "��û��ִ�е���һ�䣿<br>";
    $myClass3 = new MyClass3();
    $myClass3->myFunction1("nibuguai",22)."<br>";
    $myClass3->myFunction2("nibuguai",22,"��")."<br>";
    echo $myClass3->name."<br>";
    echo $myClass3->age."<br>";
    echo $myClass3->sex."<br>";
    
    
    
    //3. ����
    class MyClass4{
        const str_constant = "����ֵ";
        const int_constant = 10;
        
        function showConstant(){
            echo self::str_constant."<br>";
            echo self::int_constant."<br>";
        }
    }
    
    echo MyClass4::str_constant."<br>";
    
    $className = "MyClass4";
    echo "echo $className::int_constant: ".$className::int_constant."<br>";   // �� 5.3.0 ��
    
    
    
    //4. ������
    abstract class AbstractClass{
        abstract public function myFunction3();
        abstract public function myFunction4($name);
        
        public function myFunction5(){
            echo "function myFunction5()";
        }
    }
    
    class MyClass5 extends AbstractClass{
        public function myFunction3(){
            echo "ʵ��function myFunction3()<br>";
        }
        
        public function myFunction4($name){
            echo "ʵ��function myFunction4()<br>";
        }
    }
    
    $myClass5 = new MyClass5();
    echo $myClass5->myFunction3();
    echo $myClass5->myFunction4("nibuguai");
    
    
    
    //5. Static �ؼ���
    /*
     * ���������Ի򷽷�Ϊ static(��̬)���Ϳ��Բ�ʵ�������ֱ�ӷ��ʡ�
     * ��̬���Բ���ͨ��һ������ʵ�����Ķ��������ʣ�����̬�������ԣ���
     * ���ھ�̬��������Ҫͨ�����󼴿ɵ��ã�����α���� $this �ھ�̬�����в����á�
     * ��̬���Բ������ɶ���ͨ�� -> �����������ʡ�
     * �� PHP 5.3.0 �𣬿�����һ����������̬�����ࡣ���ñ�����ֵ����Ϊ�ؼ��� self��parent �� static��
     */
    
    class Foo{
        public static $my_static = "my static var";
        
        public static function staticValue(){
            return self::$my_static;
        }
    }
    
    echo Foo::staticValue()."<br>";
    
    
    
    
    //7. ���ø��๹�췽��
    //PHP ����������Ĺ��췽�����Զ��ĵ��ø���Ĺ��췽����Ҫִ�и���Ĺ��췽������Ҫ������Ĺ��췽���е��� parent::__construct() ��
    class BaseClass{
        function __construct(){
            echo "BaseClass ���й��췽��<br>";
        }
    }
    
    class SubClass extends BaseClass{
        function __construct(){
            parent::__construct();
            echo "SubClass ���й��췽��<br>";
        }
    }
    
    $subClass = new SubClass();
    
    
    
    
    
    
    
?>