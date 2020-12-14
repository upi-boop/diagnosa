
<?php

    session_start();
     if(!isset($_SESSION['login_user'])){
            header("Location: login.php");
        }
?>

<!doctype html>
<html lang="en">
  <head>
    
  <link rel="stylesheet" href="css/bootstrap.min.css">
<title>Home</title>

</head>
  
  <body>

    <style>

      body{ 
            background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
            background-repeat: no-repeat;
            height: 700px;
            margin:50px;
}
::-webkit-scrollbar{
    display: none;
}

      .jumbotron{
       background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
       background-repeat: no-repeat;
       height: 650px;
       
}
    </style>


<?php require "navbar.php";?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Diagnosa Penyakit Demam Berdarah dan Tifus.</p>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>