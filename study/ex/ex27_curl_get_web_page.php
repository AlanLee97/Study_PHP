<?php
//1. �򵥵���ҳ����
//     $curl = curl_init("http://www.baidu.com");
//     curl_exec($curl);
//     curl_close($curl);


//2. cURL��ȡҳ��֮��ȡ��ҳ��Ϣ���滻
// $curlobj = curl_init();          // ��ʼ��
// curl_setopt($curlobj, CURLOPT_URL, "http://www.baidu.com");       // ���÷�����ҳ��URL
// curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);         // ִ��֮��ֱ�Ӵ�ӡ����
// $output=curl_exec($curlobj);   // ִ��
// curl_close($curlobj);        // �ر�cURL
// echo str_replace("�ٶ�","php",$output);

//3. cURL��ȡҳ��֮��ȡ����
header("Content-Type:text/html; charset=utf-8");
$data = 'theCityName=����';
$curlobj = curl_init();
curl_setopt($curlobj, CURLOPT_URL, "http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");
curl_setopt($curlobj, CURLOPT_USERAGENT, "user-agent:Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0");
curl_setopt($curlobj, CURLOPT_HEADER, 0); //����ʱ�Ὣͷ�ļ�����Ϣ��Ϊ��������������ﲻ����
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1); //����ɹ�ֻ��������أ����Զ�����κ����ݡ����ʧ�ܷ���FALSE
curl_setopt($curlobj, CURLOPT_POST, 1); //�������PHPȥ��һ�������HTTP POST���������ѡ��Ϊһ������ֵ�����POST����ͨ�� application/x-www-from-urlencoded ���ͣ�������HTML��ʹ�á�
curl_setopt($curlobj, CURLOPT_POSTFIELDS, $data); //��ҪPOST������
curl_setopt($curlobj, CURLOPT_HTTPHEADER, array("application/x-www-form-urlencoded;
 charset=utf-8", "Content-length: ".strlen($data)));
$rtn = curl_exec($curlobj);
if(!curl_errno($curlobj)){
    // $info = curl_getinfo($curlobj);
    // print_r($info);
    echo $rtn;
} else {
    echo 'Curl error: ' . curl_error($curlobj);
}
curl_close($curlobj);

?>
