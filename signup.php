<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作

    $name=$_POST['name'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password

    include('connect.php');//链接数据库
    $q="insert into text(id,username,password) values (1,'$name','$password')";//向数据库插入表单传来的值的sql
    //var_dump($q);exit;
    $reslut=mysql_query($q);//执行sql
    
    if (!$reslut){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }else{
        echo "注册成功";//成功输出注册成功
    }
    mysql_close($con);//关闭数据库

?>