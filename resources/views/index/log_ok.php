<?php 
include("connect.php");
$regname=$_POST[regname];
$regpwd1=md5($_POST[regpwd1]);
$query=mysql_query("select * from tb_admin where name='$regname' and pwd='$regpwd1' and status='1'");
if(mysql_num_rows($query)==1){
session_register("regname");
$_SESSION["regname"]=$_POST[regname];
echo "<script> alert('登录成功!'); window.location.href='tql/wd-1.html';</script>";
}else{
echo "<script> alert('登录失败!请检查邮件是否激活'); window.location.href='log.php';</script>";
}
?>