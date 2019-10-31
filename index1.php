<link rel="stylesheet" href="bootstrap.min.css">
<div class="container" style="margin-top: 50px; width: 550px;">
<form action="" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">歌曲名称</label>
            <div class="col-sm-10">
                <input type="text" name="title" id="title" class="form-control">
            </div>
        </div>

    <div class="form-group">
        <label for="zq" class="col-sm-2 control-label">作曲</label>
        <div class="col-sm-10">
            <input type="text" name="zq" id="zq" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="zc" class="col-sm-2 control-label">作词</label>
        <div class="col-sm-10">
            <input type="text" name="zc" id="zc" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label for="songer" class="col-sm-2 control-label">歌手</label>
        <div class="col-sm-10">
            <input type="text" name="songer" id="songer" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="zj" class="col-sm-2 control-label">所属专辑</label>
        <div class="col-sm-10">
            <input type="text" name="zj" id="zj" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default"> 提交</button>
        </div>
    </div>

</form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $title=$_POST['title'];
    $zq=$_POST['zq'];
    $zc=$_POST['zc'];
    $songer=$_POST['songer'];
    $zj=$_POST['zj'];
$con=mysqli_connect('localhost','root','root','test');
if (!$con){
    echo cubrid_error_code();
}
mysqli_set_charset($con,'utf8');
$sql="INSERT INTO song VALUES('null','$title','$zq','$zc','$songer','$zj')";
$res=mysqli_query($con,$sql);
if ($res!=false){
    echo '<script>alert("加入成功");</script>';
    header("refresh:1;url=list.php");
    exit;
}else{
    echo '失败';
}
}
?>

