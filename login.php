<?php
include("connection.php");
session_start(); 
?>
<style>
    /* set entire body that is webpage */
body{
	background: #383a3d;
	padding-top: 25vh;	
}
/* set form background colour*/
form{
	background: #fff;
}
/* set padding and size of th form */
.form-container{
	border-radius: 10px;
	padding: 30px;
}
#loginborder{
border:solid 1px grey;
}


</style>
<html>
<head>
 
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="css/login_style.css">
</head>
 
<body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Login form creation starts-->
  <section class="container-fluid">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-4" id="loginborder">
        <form class="form-container" method="POST" action=""  name="login">
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Login </h4>
          <label for="Userid">UserId</label>
           <input type="text" class="form-control" id="userid" name="userid"  placeholder="Enter user">
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" name="InputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
        <div class="form-footer">
         
          
        </div>
        </form>
      </section>
    </section>
  </section>
<!-- Login form creation ends -->
</body>
</html>
<?php 
if(isset($_POST['userid']))
{
$check="SELECT * from user where user_id='".$_POST['userid']."' AND password='".$_POST['InputPassword1']."'";
$q=mysqli_query($conn,$check);
$data=mysqli_fetch_assoc($q);
if(isset($data['id']))
 {
if($data['user_id']==$_POST['userid'] AND $data['password']==$_POST['InputPassword1']) 
{
$_SESSION['id']=$data['id'];
$_SESSION['name']=$data['name'];
echo "<script>alert('log in');</script>";
 echo "<script>window.location.href='home.php'</script>";

}
else{
echo "<script>alert('wrong data pass');</script>";
echo "<script>window.location.href='login.php'</script>";

}

}
else{
echo "<script>alert('Wrong username and password');</script>";
echo "<script>window.location.href='login.php'</script>";

}
}

       ?>

    