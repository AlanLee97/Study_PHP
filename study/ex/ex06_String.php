<?php
/*
 * �� PHP �У�ֻ��һ���ַ����������
 * ��������� (.) ���ڰ������ַ���ֵ����������
 */
  $greeting = "hello world!";
  $me = "nibuguai";
  echo $greeting.$me;
  echo "<br/>";
  
  /* 
   * PHP strlen() ����
   * ��ʱ֪���ַ���ֵ�ĳ����Ǻ����õġ�
   * strlen() ���������ַ����ĳ��ȣ��ַ�������
   * �����ʵ�������ַ��� "Hello world!" �ĳ��ȣ�
   * 
   */
  echo "nibuguai�ַ����ĳ���Ϊ".strlen($me);
  echo "<br/>";
  
  
  /*
   * PHP strpos() ����
   * strpos() �����������ַ����ڲ���һ���ַ���һ��ָ�����ı���
   * ������ַ������ҵ�ƥ�䣬�ú����᷵�ص�һ��ƥ����ַ�λ�á����δ�ҵ�ƥ�䣬�򷵻� FALSE��
   * 
   */
  echo strpos($greeting,"world");
  //���6
  echo "<br/>";
  
?>