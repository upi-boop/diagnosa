
<?php

    session_start();
     if(!isset($_SESSION['login_user'])){
            header("Location: login.php");
        }

$conn = mysqli_connect("localhost","root","","diagnosa");

if (mysqli_connect_errno()){
    echo "koneksi gagal".mysqli_connect_error();
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    

<link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Formulir</title>


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



<?php require "navbar.php";?>
        <br>
            <p><h1><center>DIAGNOSA PENYAKIT DEMAM BERDARAH DAN TIFUS</center></h1></p>
                <hr>
                <br>
    

    <table> 
	<form action="" method="post">
        <tr>        
            <td><label for=""> Nama</label></td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
    
        <tr>    
            <td><label for="">TTL</label></td>
            <td>:</td>
            <td><input type="date" name="ttl"></td>
        </tr>
    
        <tr>    
            <td><label for="">No. Hp</label></td>
            <td>:</td>
            <td><input type="text" name="nohp"></td>
        </tr>
   
        <tr>
		    <td></td>
		    <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </form>
    </table>

    <?php
        if (isset($_POST["submit"])){
            if(tambah($_POST)>0){
                echo "berhasil";
            }else{
                echo "gagal";
            }
        }

    function tambah($data)
    {
        global $conn;
        $nama = ($data["nama"]);
        $ttl = ($data["ttl"]);
        $nohp = ($data["nohp"]);


    $query = "INSERT INTO biodata VALUES ('','$nama', '$ttl', '$nohp')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

    
    ?>

<br>
<hr>

<p> <h1><center>GEJALA YANG DIALAMI</center></h1></p>
    <hr>
    <br>

    <form action="coba.php" method="POST" name="input">
    <input type="checkbox"  name="demam" value="Demam tinggi, tenang jangan panik karena bisa saja menunjukan kamu cuman masuk angin ">
    <label >Demam Tinggi</label>

    <input type="checkbox"  name="makan" value="Nafsu Makan turun, mungkin kamu perlu tambahan suplemen makanan dan vitamin C.">
    <label >Nafsu Makan Menurun</label>

    <input type="checkbox"  name="sakit" value="sakit bagian Perut, kamu bisa saja maag karna telat makan. namun jika di setai gejala demam, Nafsu makan turun kamu harus segera konsultasi dokter">
    <label >Sakit Pada Bagian Perut</label>

    <input type="checkbox"  name="bintik" value="bintik merah , mungkin cuman bintik biasa namun jika di sertai gejala demam, sakit perut, dan tidak nafsu makan. kamu harus benar benar segera daang ke dokter itu bisa berbahaya ">
    <label >Bintik Merah</label>
    <br>

    <td></td><input type="submit" name="submit" value="diagnosa"></td>
</form>

    

</body>
</html>