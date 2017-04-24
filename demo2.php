<?php
header("Content-type: text/html; charset=utf-8");
// 创建连接
$conn = new mysqli("localhost","root","377586050");
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . mysqli_error());
} 
echo "连接成功"."<br>";

$runoob_title = '哈哈';
$runoob_author = '嘿嘿';
$submission_date = '2017-4-21';
 
$sql = "INSERT INTO runoob_tbl ".
        "(runoob_title,runoob_author, submission_date) "."VALUES ".
        "('$runoob_title','$runoob_author','$submission_date')";
 
mysqli_select_db( $conn, 'RUNOOB' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功";
mysqli_close($conn);
?>