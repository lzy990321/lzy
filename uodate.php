
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    $m_id=$_GET['m_id'];
    $con=mysqli_connect('localhost','root','root','test');
    if($con!=false){
        mysqli_set_charset($con,'UTF8');
        $sql="select * from song where m_id=$m_id";
        $res=mysqli_query($con,$sql);
        if($res!=false){
            $row=mysqli_fetch_assoc($res);
        }
    }
    mysqli_close($con);
}else{
    $m_id=$_GET['m_id'];
    $title=$_POST['title'];
    $zq=$_POST['zq'];
    $zc=$_POST['zc'];
    $songer=$_POST['songer'];
    $zj=$_POST['zj'];
    $con=mysqli_connect('localhost','root','root','test');
    if($con!=false){
        mysqli_set_charset($con,'UTF8');
        $sql="update song set
        m_title='$title',
        compose='$zq',
        zuoci='$zc',
        singer='$songer',
        zhuanji='$zj' 
        where m_id=$m_id";
        $res=mysqli_query($con,$sql);
        if($res!=false){
            header('location:list.php');
        }
    }
    mysqli_close($con);
}

?>
<link rel="stylesheet" href="bootstrap.min.css">
<div class="container" style="margin-top: 50px; width: 550px;">
    <form action="" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">歌曲名称</label>
            <div class="col-sm-10">
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $row['m_title']?>">
            </div>
        </div>

        <div class="form-group">
            <label for="zq" class="col-sm-2 control-label">作曲</label>
            <div class="col-sm-10">
                <input type="text" name="zq" id="zq" class="form-control" value="<?php echo $row['compose']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="zc" class="col-sm-2 control-label">作词</label>
            <div class="col-sm-10">
                <input type="text" name="zc" id="zc" class="form-control" value="<?php echo $row['zuoci']?>">
            </div>
        </div>

        <div class="form-group">
            <label for="songer" class="col-sm-2 control-label">歌手</label>
            <div class="col-sm-10">
                <input type="text" name="songer" id="songer" class="form-control" value="<?php echo $row['singer']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="zj" class="col-sm-2 control-label">所属专辑</label>
            <div class="col-sm-10">
                <input type="text" name="zj" id="zj" class="form-control" value="<?php echo $row['zhuanji']?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-default"> 提交</button>
            </div>
        </div>

    </form>
</div>