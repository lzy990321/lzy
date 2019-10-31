<?php
/**
 * Created by PhpStorm.
 * User: 李子阳的联想
 * Date: 2019/10/12
 * Time: 16:04
 */
$m_id=$_GET['m_id'];
$con=mysqli_connect('localhost','root','root','test');
if (!$con){
    echo cubrid_error_code();
}
mysqli_set_charset($con,'utf8');
$sql="DELETE  from song WHERE m_id=$m_id";
$res=mysqli_query($con,$sql);
if ($res){
    header("refresh:1;url=list.php");
    exit;
}
mysqli_close($con);