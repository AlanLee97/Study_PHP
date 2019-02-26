<?php
/*
 * 在 PHP 中，只有一个字符串运算符。
 * 并置运算符 (.) 用于把两个字符串值连接起来。
 */
  $greeting = "hello world!";
  $me = "nibuguai";
  echo $greeting.$me;
  echo "<br/>";
  
  /* 
   * PHP strlen() 函数
   * 有时知道字符串值的长度是很有用的。
   * strlen() 函数返回字符串的长度（字符数）。
   * 下面的实例返回字符串 "Hello world!" 的长度：
   * 
   */
  echo "nibuguai字符串的长度为".strlen($me);
  echo "<br/>";
  
  
  /*
   * PHP strpos() 函数
   * strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
   * 如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
   * 
   */
  echo strpos($greeting,"world");
  //输出6
  echo "<br/>";
  
?>