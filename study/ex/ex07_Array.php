<?php
    $intArr = array(1,2,3);
    $strArr = array("a","bc","def");
    
    //�Զ����±�����飨�������飩
    //��ʽ1��
    $x = array(
        "a" => "str1",
        "b" => "str2",
        "c" => "str3"
    );
    
    //��ʽ2��
    $y["str1"] = "abc1";
    $y["str2"] = "abc2";
    $y["str3"] = "abc3";
    
    $length = count($intArr);   //��ȡ���鳤��
    
    for($i = 0, $j="a"; $i < $length; $i++, $j++){
        echo $intArr[$i]." ";
        echo $strArr[$i]." ";
        echo $x[$j]." ";
        echo "<br>";
    }
    echo "����y��";
    echo $y["str1"]." ".$y["str2"]." ".$y["str3"];
    
    echo "<br>";
    //������������y
    foreach($y as $index => $value){
        echo "index = "."$index".", value = "."$value";
        echo "<br>";
    }
    
    /*
     * ��ȡ����ĳ��� - count() ����
     * count() �������ڷ�������ĳ��ȣ�Ԫ�ص���������
     * 
     */
    echo "<br>";
    echo "����x�ĳ���Ϊ".count($x);
    
    echo "<br>";
    //��������
    /*
     * sort() - �����������������
     * rsort() - ��������н�������
     * asort() - ���ݹ��������ֵ�������������������
     * ksort() - ���ݹ�������ļ��������������������
     * arsort() - ���ݹ��������ֵ����������н�������
     * krsort() - ���ݹ�������ļ�����������н�������
     */
    
    echo "sort()�������� : ".sort($intArr)."<br>";
    echo "rsort()�������� : ".rsort($intArr)."<br>";
    echo "asort()��������ֵ�������� : ".asort($x)."<br>";
    echo "ksort()��������ֵ�������� : ".ksort($x)."<br>";
    echo "arsort()��������ֵ�������� : ".arsort($x)."<br>";
    echo "krsort()��������ֵ�������� : ".krsort($x)."<br>";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>