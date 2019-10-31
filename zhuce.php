<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    
    .login{
        width: 400px;
        margin: 0 auto;
        margin-top: 15%;
    }
    </style>

</head>
<body background="timg.jpg">
    <div class="login">
        <form action="" method="POST" name="from"  onsubmit="return myform();">
                <div class="form-group">
                  <label for="exampleInputEmail1">用户名</label>
                  <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="请输入用户名" value="" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">密码</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="请输入密码" value="" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">请再输入密码</label>
                    <input type="password" class="form-control" name="password2" id="exampleInputPassword1" placeholder="请再输入密码" value="" >
                  </div>
                <button type="submit" class="btn btn-default">提交</button>
              </form>
            </div>
</body>
</html>

<script>
  function myform(from){
  var user = document.forms["from"]["username"].value;
  var password = document.forms["from"]["password"].value;
  var password2 = document.forms["from"]["password2"].value;

    if(user=="" || user==null || password=="" || password==null){
      alert("请检查是否全部填写！");
      return false;
    }
    if(password != password2){
        alert("密码输入不相同，请重新输入");
        return false;
    }

  }

</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $pwd = $_POST['password'];
    $con = mysqli_connect('localhost', 'root', 'root', 'test');
    if (!$con) {
        echo cubrid_error_code();
    }
    mysqli_set_charset($con,'utf8');
    mysqli_set_charset($con, 'utf8');
    $sql = "insert into login values ('$name','$pwd')";
    $res = mysqli_query($con, $sql);
    if ($res){
        header('Location: login.php');
    }
}
?>

