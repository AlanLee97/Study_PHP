<?php

//1. 读取文件
    $filename = "D:\\Test\\test.txt";
    //$fp = fopen($filename, "r");    //打开文件
    
    //方式1 fopen(),fread(),fclose()
    //$fr = fread($fp, filesize($filename));
    //echo $fr;
    //fclose($fp);
    
    //方式2 readfile()
    //readfile($filename);
    
    //方式3  file_get_contents($filename)
    //echo file_get_contents($filename);
    
    
    /*
     * 逐行读取文件fgets($handle)
     * fgets() 函数用于从文件中逐行读取文件。
     * 注释：在调用该函数之后，文件指针会移动到下一行。
     */
//     while(!feof($fp)){
//         echo fgets($fp)."<br>";
//     }
//     fclose($fp);
    
    
//     echo "<br><p>======================换行符=================</p><br>";
//     /*
//      * 逐字符读取文件
//      * fgetc() 函数用于从文件中逐字符地读取文件。
//      * 注释：在调用该函数之后，文件指针会移动到下一个字符。
//      */
//     while(!feof($fp)){
//         echo fgetc($fp);
//     }
//     fclose($fp);

    
    
    
    
    
    
//2. 写入文件

    //$data = "这是我要插入的字符串";
    //方式1 
//     $numtypes = file_put_contents($filename, $data);
//     if($numtypes){
//         echo "写入成功！打开文件内容看看<br />";
//         echo file_get_contents($filename);
//     }else {
//         echo "写入失败";
//     }
    
    //方式2 
    /*
     * write配合fopen进行写入操作
     * int fwrite ( resource $文件资源变量, string $写入的字符串 [, int 长度])
     * 注：fwrite的别名函数是fputs
     * 我们上节课试了r模式，只道是读取的时候使用，接下来我们用fwrite加上fopen中的w，写入模式来进行文件写入。
     */
//     $filename1 = "D:\\Test\\newfile.txt";
//     $string = "这是我要写入的数据";
//     $fp1 = fopen($filename1,"w+");   //可选r,r+,w,w+,a,a+,x,x+模式
//     $content = fwrite($fp1, $string);
    
    
//     echo "下面是写入的内容：<br />";
//     echo file_get_contents($filename1);
    
//     fclose($fp1);

    
    
    
//3. 创建临时文件

    //resource tmpfile ( )
    //功能：创建一个临时文件，返回资源类型。关闭文件即被删除。
//     $handle = tmpfile();
//     $string = "创建一个临时文件，返回资源类型。关闭文件即被删除。";
//     $numbytes = fwrite($handle, $string);
    
    
//     fclose($handle);
//     echo "写入了".$numbytes."个字节";
    
    
    
//4. 文件复制
//     $oldname = "D:\\Test\\oldfile.txt";
//     $newname = "D:\\Test\\newfile1.txt";
//     $status = rename($oldname, $newname);
//     if($status == true){
//         echo "文件重命名成功";
//     }else{
//         echo "文件重命名失败";
//     }

    
//5. 文件删除    bool unlink(指定路径的文件)
    /*
     * 删除文件
     * 删除文件就是将指定路径的一个文件删除，不过这个删除是直接删除。使用的是windows电脑，你在回收站看不到这个文件。
     * 你只会发现，这个文件消失了。
     * bool unlink(指定路径的文件)
     */
    
//     $status = unlink($filename);
//     if($status == true){
//         echo "文件删除成功";
//     }else{
//         echo "文件删除失败";
//     }
    
    
    
//6. php检测文件属性函数
/*
 * bool file_exists ( $指定文件名或者文件路径)
    功能：文件是否存在。

    bool is_readable ( $指定文件名或者文件路径)
    功能：文件是否可读

    bool is_writeable ( $指定文件名或者文件路径)
    功能：文件是否可写

    bool is_executable ( $指定文件名或者文件路径)
    功能：文件是否可执行

    bool is_file ( $指定文件名或者文件路径)
    功能：是否是文件

    bool is_dir ( $指定文件名或者文件路径)
    功能：是否是目录

    void clearstatcache ( void )
    功能：清楚文件的状态缓存
 */
//     $filedir = 'D:\\Test\\fold';
//     $files = [$filename,$filedir];
//     $status = true;
//     foreach ($files as $value){
//         echo "<br />================分割线===============<br>";
//         echo $value."<br>";
        
//         if(file_exists($value)){
//             echo "文件存在<br>";
//             if(is_file($value)) {
//                 echo "这是一个文件<br/>";
//                 if(is_readable($value)){
//                     echo "文件可读<br />";
//                 }else {
//                     echo "文件不可读<br />";
//                 }
//                 if(is_writable($value)){
//                     echo "文件可写<br />";
//                 }else {
//                     echo "文件不可写<br />";
//                 }
//                 if(is_executable($value)){
//                     echo "文件可执行<br />";
//                 }else {
//                     echo "文件不可执行<br />";
//                 }
                
//             }elseif (is_dir($filedir)){
//                 echo "是一个文件夹（目录）";
//             }else{
//                 echo "未知类型";
//             }
//         }else{
//             echo "文件不存在<br/>";
//         }
        
        
//         echo "<br />================分割线===============<br>";
//     }
    
 
//7. 
/*
 * 文件指针操作函数
 * rewind ( resource handle)
 * 功能：指针回到开始处
 * fseek ( resource handle, int offset [, int from_where])
 * 功能：文件指针向后移动指定字符
 */
//     $fp = fopen($filename, "r+");
//     echo fread($fp, 10)."<br>";
    
//     //指针设置回到开始处
//     rewind($fp);
//     echo "<br />";
    
//     echo fread($fp, 10)."<br>";
    
//     //文件指针向后移动10个字符
//     echo fseek($fp,5);
//     echo '<br>';
    
//     //再看看文件中输出的是什么
//     echo fread($fp,10);
//     echo '<br>';
//     fclose($fp);
    
    
//8. 文件的时间函数
//     if (file_exists($filename)) {
//         echo "{$filename}文件的上次访问时间是:"  . date("Y-m-d H:i:s",fileatime($filename))."<br />";
//         echo "{$filename}文件的创建时间是: " . date("Y-m-d H:i:s", filectime($filename))."<br />";
//         echo "{$filename}文件的修改时间是: " . date("Y-m-d H:i:s", filemtime($filename))."<br />";
//     }

    
    
//9. php 目录处理函数

//     //设置打开的目录是D盘
//     $dir = "D:/";
    
//     //判断是否是文件夹，是文件夹
//     if (is_dir($dir)) {
//         if ($dh = opendir($dir)) {
            
//             //读取一次向后移动一次文件夹指针
//             echo readdir($dh)."<br>";
//             echo readdir($dh)."<br>";
//             echo readdir($dh)."<br>";
//             echo readdir($dh)."<br>";
            
//             //读取到最后返回false
            
//             //关闭文件夹资源
//             closedir($dh);
//         }
//     }
    
    
    
    
//10. php 文件权限设置

    //linux系统下使用
    //修改linux 系统/var/wwwroot/某文件权限为755
//     chmod("/var/wwwroot/index.html", 755);
//     chmod("/var/wwwroot/index.html", "u+rwx,go+rx");
//     chmod("/somedir/somefile", 0755); 
    
    
    
//11. php文件路径函数
    $path = $filename;
    $pathArr = pathinfo($path);
    echo '文件目录名：'.$pathArr['dirname']."<br />";
    echo '文件全名：'.$pathArr['basename']."<br />";
    echo '文件扩展名：'.$pathArr['extension']."<br />";
    echo '不包含扩展的文件名：'.$pathArr['filename']."<br />";
    
    $query_data = [
        "username" => "nibuguai",
        "age" => 22
    ];
    
    //http_build_query	生成url 中的query字符串
    //http_build_url	生成一个url
    
    echo http_build_query($query_data)."<br />";
    
    
    

?>