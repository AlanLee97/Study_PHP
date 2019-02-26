<?php
//初始化
$ci = curl_init();
//设置选项，包括URL
curl_setopt($ci,CURLOPT_URL,"http://www.csdn.net");
curl_setopt($ci,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ci,CURLOPT_POST,1);
$data = "hello";
curl_setopt($ci,CURLOPT_POSTFIELDS,$data);
curl_setopt($ci,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ci,CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($ci,CURLOPT_HEADER,0);
curl_setopt($ci,CURLOPT_TIMEOUT,10);

//执行并获取HTML文档内容
$output = curl_exec($ci);
//释放curl句柄
curl_close($ci);
//打印获得的数据
print_r($output);
?>