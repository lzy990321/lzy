
<form action="" method="post">
        <div>
            <label for="bt">标题</label>
            <input type="text" name="bt" id="bt">
        </div>
<div>
    <label for="nr">内容</label>
    <input type="text" name="nr" id="nr">
</div>
<div>
    <input type="submit">
</div>
</form>



<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){

    $bt=$_POST['bt'];
    $nr=$_POST['nr'];
    $con=mysqli_connect('localhost','root','root','talk');
    if(!$con){
        cubrid_error_code();
    }
    mysqli_set_charset($con,'utf8');
    $sql="insert into bk(group_name,msg) values (' $bt','$nr')";
    $res=mysqli_query($con,$sql);
    if ($res!=false){
        echo '加入成功';
    }else{
        echo '失败';
    }
}



?>



