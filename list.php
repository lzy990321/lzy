<link rel="stylesheet" href="bootstrap.min.css">
<?php
$con=mysqli_connect('localhost','root','root','test');
if (!$con){
    echo cubrid_error_code();
}
mysqli_set_charset($con,'utf8');
$sql="select * from song";
$res=mysqli_query($con,$sql);
$arr=[];
while ($row=mysqli_fetch_assoc($res)){
    $arr[]=$row;
}
mysqli_close($con);
?>


<div class="container" style="margin-top:100px;">
<a href="index1.php">添加</a>
<table class="table table-hover">
    <tr>
        <th>歌曲编号</th><th>歌曲名称</th><th>作曲</th><th>作词</th><th>歌手</th><th>所属专辑</th>
        <th>操作</th>
    </tr>
    <?php
    foreach($arr as $v){ ?>
    <tr>
        <td><?php echo $v['m_id'] ?></td>
        <td><?php echo $v['m_title'] ?></td>
        <td><?php echo $v['compose'] ?></td>
        <td><?php echo $v['zuoci'] ?></td>
        <td><?php echo $v['singer'] ?></td>
        <td><?php echo $v['zhuanji'] ?></td>
        <td>
        <a href="delect.php?m_id=<?php echo $v['m_id'] ?>" class="btn btn-danger">删除</a>
        <a href="uodate.php?m_id=<?php echo $v['m_id'] ?>" class="btn btn-default">编辑</a>
        </td>
    </tr>
  <?php  }

    ?>
</table>
</div>