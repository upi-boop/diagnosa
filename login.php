<?php
  session_start();
     if(isset($_SESSION['login_user'])){
            header("Location: formulir.php");
          }
?>

<!DOCTYPE html>
<html>
 <head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>

    body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
       background-repeat: no-repeat;
       height: 700px;
           margin:50px;
}

::-webkit-scrollbar{
display: none;
}
#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
}

#card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: 0.5rem auto 0 auto;
      width: 89px;
}

a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
#forgot legend{
	text-align: center;
}
</style>
 </head>
 <body>


 	<div id="card"> 
 				<div id="card-content">
  <div id="card-title">
    <h2>LOGIN</h2>
    <div class="underline-title">
    	    </div>
    		<form method="post" class="form"> 
    	<label for="" style="padding-top:13px">username</label>
  <input type="text" name="username">
  <div class="form-border"></div>
<label for="user-password" style="padding-top:22px">&nbsp;Password</label>
  <input type="password" name="password">
  <div class="form-border"></div>
<a id="forgot"><legend id="forgot-pass">Forgot password?</legend></a>

	<input id="submit-btn" type="submit" name="submit" value="LOGIN">
  <a href="#" id="signup">daftar</a>
    	</form>

    
  </div>
</div>
 	</div>
 </body>
</html>


    <?php

      $conn = mysqli_connect("localhost","root","","diagnosa");

      if (mysqli_connect_errno()){
          echo "koneksi gagal".mysqli_connect_error();
          exit();
      }

    if (isset($_POST['submit']))
        {     
  

    session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];



    $query = mysqli_query($conn,"SELECT username FROM user WHERE username='$username' and password='$password'");
     if (mysqli_num_rows($query) != 0)
    {
      // set session


    $_SESSION['login_user']= true;


     echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
