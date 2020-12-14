<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	

	<style>
* {
    margin: 0;
    padding: 0;
}

::-webkit-scrollbar{
    display: none;
}
        body{ 
            background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
            background-repeat: no-repeat;
            height: 700px;
            margin:50px;      
    }
       
    
    </style>

</head>


<body>



<?php

if (isset($_POST['submit'])) {
echo " Jika Keuhan Anda adalah :<br>";

if (isset($_POST['demam'])) {
echo "+ " . $_POST['demam'] . "<br>";
}
if (isset($_POST['makan'])) {
echo "+ " . $_POST['makan'] . "<br>";
}
if (isset($_POST['sakit'])) {
echo "+ " . $_POST['sakit'] . "<br>";
}
if (isset($_POST['bintik'])) {
echo "+ " . $_POST['bintik'] . "<br>";
}
}
?>


</body>
</html>



<!-- 

// $dbd=$_POST['dbd'];
// print_r($_POST);
// die();

// $demam =$_POST['demam'];
// $makan =$_POST['makan'];
// $sakit =$_POST['sakit'];
// $bintik = $_POST['bintik'];
// $hasil = $demam+$makan+$sakit+$bintik; 
// $dbd = $hasil;

//   if (isset($_POST["submit"])){
// 			if ($dbd >= 4 ){
// 				echo "positive";
// 			}else if ($dbd >= 3) {
// 				echo "positive";
// 			}else if ($dbd >= 2) {
// 				echo "negative";
// 			}else if ($dbd >= 1) {
// 				echo "negative";
// 			}else{
// 				echo "kamu sehat";
// 			}

 -->