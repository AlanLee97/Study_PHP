<?php
//��ʼ��
$ci = curl_init();
//����ѡ�����URL
curl_setopt($ci,CURLOPT_URL,"http://www.csdn.net");
curl_setopt($ci,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ci,CURLOPT_POST,1);
$data = "hello";
curl_setopt($ci,CURLOPT_POSTFIELDS,$data);
curl_setopt($ci,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ci,CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($ci,CURLOPT_HEADER,0);
curl_setopt($ci,CURLOPT_TIMEOUT,10);

//ִ�в���ȡHTML�ĵ�����
$output = curl_exec($ci);
//�ͷ�curl���
curl_close($ci);
//��ӡ��õ�����
print_r($output);
?>