<?php
namespace DBpro\Model;

interface iBDUtils
{
  /**
  *isEmailExits方法接受一个字符串参数$newEmail,返回当前用户信息表中是否有用户已经注册了这个email，
  *如果已经有人注册，返回true，否则返回false
  */
  public function isEmailExits($newEmail);
  /**
  *register方法接受一个数组参数$regArray,将数组存储到用户信息表中
  *如果写入存储成功，返回true，否则返回false
  */
  public function register($regArray);
}
