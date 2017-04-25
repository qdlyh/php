<?php
//$con = new mysqli("localhost","root","377586050",'runoob');
 $con=@mysql_connect('localhost','root',"377586050");
// 检测连接
if ($con) {
    echo "连接成功"."<br>";
} 
//echo "连接成功"."<br>";
    
    mysql_select_db('text');

?>
