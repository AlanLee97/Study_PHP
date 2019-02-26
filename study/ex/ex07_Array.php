<?php
    $intArr = array(1,2,3);
    $strArr = array("a","bc","def");
    
    //自定义下标的数组（关联数组）
    //方式1：
    $x = array(
        "a" => "str1",
        "b" => "str2",
        "c" => "str3"
    );
    
    //方式2：
    $y["str1"] = "abc1";
    $y["str2"] = "abc2";
    $y["str3"] = "abc3";
    
    $length = count($intArr);   //获取数组长度
    
    for($i = 0, $j="a"; $i < $length; $i++, $j++){
        echo $intArr[$i]." ";
        echo $strArr[$i]." ";
        echo $x[$j]." ";
        echo "<br>";
    }
    echo "数组y：";
    echo $y["str1"]." ".$y["str2"]." ".$y["str3"];
    
    echo "<br>";
    //遍历关联数组y
    foreach($y as $index => $value){
        echo "index = "."$index".", value = "."$value";
        echo "<br>";
    }
    
    /*
     * 获取数组的长度 - count() 函数
     * count() 函数用于返回数组的长度（元素的数量）：
     * 
     */
    echo "<br>";
    echo "数组x的长度为".count($x);
    
    echo "<br>";
    //数组排序
    /*
     * sort() - 对数组进行升序排列
     * rsort() - 对数组进行降序排列
     * asort() - 根据关联数组的值，对数组进行升序排列
     * ksort() - 根据关联数组的键，对数组进行升序排列
     * arsort() - 根据关联数组的值，对数组进行降序排列
     * krsort() - 根据关联数组的键，对数组进行降序排列
     */
    
    echo "sort()升序排列 : ".sort($intArr)."<br>";
    echo "rsort()降序排列 : ".rsort($intArr)."<br>";
    echo "asort()关联数组值升序排列 : ".asort($x)."<br>";
    echo "ksort()关联数组值升序排列 : ".ksort($x)."<br>";
    echo "arsort()关联数组值降序排列 : ".arsort($x)."<br>";
    echo "krsort()关联数组值降序排列 : ".krsort($x)."<br>";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>