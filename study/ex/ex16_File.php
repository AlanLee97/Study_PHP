<?php

//1. ��ȡ�ļ�
    $filename = "D:\\Test\\test.txt";
    //$fp = fopen($filename, "r");    //���ļ�
    
    //��ʽ1 fopen(),fread(),fclose()
    //$fr = fread($fp, filesize($filename));
    //echo $fr;
    //fclose($fp);
    
    //��ʽ2 readfile()
    //readfile($filename);
    
    //��ʽ3  file_get_contents($filename)
    //echo file_get_contents($filename);
    
    
    /*
     * ���ж�ȡ�ļ�fgets($handle)
     * fgets() �������ڴ��ļ������ж�ȡ�ļ���
     * ע�ͣ��ڵ��øú���֮���ļ�ָ����ƶ�����һ�С�
     */
//     while(!feof($fp)){
//         echo fgets($fp)."<br>";
//     }
//     fclose($fp);
    
    
//     echo "<br><p>======================���з�=================</p><br>";
//     /*
//      * ���ַ���ȡ�ļ�
//      * fgetc() �������ڴ��ļ������ַ��ض�ȡ�ļ���
//      * ע�ͣ��ڵ��øú���֮���ļ�ָ����ƶ�����һ���ַ���
//      */
//     while(!feof($fp)){
//         echo fgetc($fp);
//     }
//     fclose($fp);

    
    
    
    
    
    
//2. д���ļ�

    //$data = "������Ҫ������ַ���";
    //��ʽ1 
//     $numtypes = file_put_contents($filename, $data);
//     if($numtypes){
//         echo "д��ɹ������ļ����ݿ���<br />";
//         echo file_get_contents($filename);
//     }else {
//         echo "д��ʧ��";
//     }
    
    //��ʽ2 
    /*
     * write���fopen����д�����
     * int fwrite ( resource $�ļ���Դ����, string $д����ַ��� [, int ����])
     * ע��fwrite�ı���������fputs
     * �����Ͻڿ�����rģʽ��ֻ���Ƕ�ȡ��ʱ��ʹ�ã�������������fwrite����fopen�е�w��д��ģʽ�������ļ�д�롣
     */
//     $filename1 = "D:\\Test\\newfile.txt";
//     $string = "������Ҫд�������";
//     $fp1 = fopen($filename1,"w+");   //��ѡr,r+,w,w+,a,a+,x,x+ģʽ
//     $content = fwrite($fp1, $string);
    
    
//     echo "������д������ݣ�<br />";
//     echo file_get_contents($filename1);
    
//     fclose($fp1);

    
    
    
//3. ������ʱ�ļ�

    //resource tmpfile ( )
    //���ܣ�����һ����ʱ�ļ���������Դ���͡��ر��ļ�����ɾ����
//     $handle = tmpfile();
//     $string = "����һ����ʱ�ļ���������Դ���͡��ر��ļ�����ɾ����";
//     $numbytes = fwrite($handle, $string);
    
    
//     fclose($handle);
//     echo "д����".$numbytes."���ֽ�";
    
    
    
//4. �ļ�����
//     $oldname = "D:\\Test\\oldfile.txt";
//     $newname = "D:\\Test\\newfile1.txt";
//     $status = rename($oldname, $newname);
//     if($status == true){
//         echo "�ļ��������ɹ�";
//     }else{
//         echo "�ļ�������ʧ��";
//     }

    
//5. �ļ�ɾ��    bool unlink(ָ��·�����ļ�)
    /*
     * ɾ���ļ�
     * ɾ���ļ����ǽ�ָ��·����һ���ļ�ɾ�����������ɾ����ֱ��ɾ����ʹ�õ���windows���ԣ����ڻ���վ����������ļ���
     * ��ֻ�ᷢ�֣�����ļ���ʧ�ˡ�
     * bool unlink(ָ��·�����ļ�)
     */
    
//     $status = unlink($filename);
//     if($status == true){
//         echo "�ļ�ɾ���ɹ�";
//     }else{
//         echo "�ļ�ɾ��ʧ��";
//     }
    
    
    
//6. php����ļ����Ժ���
/*
 * bool file_exists ( $ָ���ļ��������ļ�·��)
    ���ܣ��ļ��Ƿ���ڡ�

    bool is_readable ( $ָ���ļ��������ļ�·��)
    ���ܣ��ļ��Ƿ�ɶ�

    bool is_writeable ( $ָ���ļ��������ļ�·��)
    ���ܣ��ļ��Ƿ��д

    bool is_executable ( $ָ���ļ��������ļ�·��)
    ���ܣ��ļ��Ƿ��ִ��

    bool is_file ( $ָ���ļ��������ļ�·��)
    ���ܣ��Ƿ����ļ�

    bool is_dir ( $ָ���ļ��������ļ�·��)
    ���ܣ��Ƿ���Ŀ¼

    void clearstatcache ( void )
    ���ܣ�����ļ���״̬����
 */
//     $filedir = 'D:\\Test\\fold';
//     $files = [$filename,$filedir];
//     $status = true;
//     foreach ($files as $value){
//         echo "<br />================�ָ���===============<br>";
//         echo $value."<br>";
        
//         if(file_exists($value)){
//             echo "�ļ�����<br>";
//             if(is_file($value)) {
//                 echo "����һ���ļ�<br/>";
//                 if(is_readable($value)){
//                     echo "�ļ��ɶ�<br />";
//                 }else {
//                     echo "�ļ����ɶ�<br />";
//                 }
//                 if(is_writable($value)){
//                     echo "�ļ���д<br />";
//                 }else {
//                     echo "�ļ�����д<br />";
//                 }
//                 if(is_executable($value)){
//                     echo "�ļ���ִ��<br />";
//                 }else {
//                     echo "�ļ�����ִ��<br />";
//                 }
                
//             }elseif (is_dir($filedir)){
//                 echo "��һ���ļ��У�Ŀ¼��";
//             }else{
//                 echo "δ֪����";
//             }
//         }else{
//             echo "�ļ�������<br/>";
//         }
        
        
//         echo "<br />================�ָ���===============<br>";
//     }
    
 
//7. 
/*
 * �ļ�ָ���������
 * rewind ( resource handle)
 * ���ܣ�ָ��ص���ʼ��
 * fseek ( resource handle, int offset [, int from_where])
 * ���ܣ��ļ�ָ������ƶ�ָ���ַ�
 */
//     $fp = fopen($filename, "r+");
//     echo fread($fp, 10)."<br>";
    
//     //ָ�����ûص���ʼ��
//     rewind($fp);
//     echo "<br />";
    
//     echo fread($fp, 10)."<br>";
    
//     //�ļ�ָ������ƶ�10���ַ�
//     echo fseek($fp,5);
//     echo '<br>';
    
//     //�ٿ����ļ����������ʲô
//     echo fread($fp,10);
//     echo '<br>';
//     fclose($fp);
    
    
//8. �ļ���ʱ�亯��
//     if (file_exists($filename)) {
//         echo "{$filename}�ļ����ϴη���ʱ����:"  . date("Y-m-d H:i:s",fileatime($filename))."<br />";
//         echo "{$filename}�ļ��Ĵ���ʱ����: " . date("Y-m-d H:i:s", filectime($filename))."<br />";
//         echo "{$filename}�ļ����޸�ʱ����: " . date("Y-m-d H:i:s", filemtime($filename))."<br />";
//     }

    
    
//9. php Ŀ¼������

//     //���ô򿪵�Ŀ¼��D��
//     $dir = "D:/";
    
//     //�ж��Ƿ����ļ��У����ļ���
//     if (is_dir($dir)) {
//         if ($dh = opendir($dir)) {
            
//             //��ȡһ������ƶ�һ���ļ���ָ��
//             echo readdir($dh)."<br>";
//             echo readdir($dh)."<br>";
//             echo readdir($dh)."<br>";
//             echo readdir($dh)."<br>";
            
//             //��ȡ����󷵻�false
            
//             //�ر��ļ�����Դ
//             closedir($dh);
//         }
//     }
    
    
    
    
//10. php �ļ�Ȩ������

    //linuxϵͳ��ʹ��
    //�޸�linux ϵͳ/var/wwwroot/ĳ�ļ�Ȩ��Ϊ755
//     chmod("/var/wwwroot/index.html", 755);
//     chmod("/var/wwwroot/index.html", "u+rwx,go+rx");
//     chmod("/somedir/somefile", 0755); 
    
    
    
//11. php�ļ�·������
    $path = $filename;
    $pathArr = pathinfo($path);
    echo '�ļ�Ŀ¼����'.$pathArr['dirname']."<br />";
    echo '�ļ�ȫ����'.$pathArr['basename']."<br />";
    echo '�ļ���չ����'.$pathArr['extension']."<br />";
    echo '��������չ���ļ�����'.$pathArr['filename']."<br />";
    
    $query_data = [
        "username" => "nibuguai",
        "age" => 22
    ];
    
    //http_build_query	����url �е�query�ַ���
    //http_build_url	����һ��url
    
    echo http_build_query($query_data)."<br />";
    
    
    

?>