<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="soal1.php">Soal 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="soal2.php">Soal 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="soal3.php">Soal 3</a>
  

      <!-- FORM-->
      <form action=""method="post">
      <center>
      <div class="container" style="width: 30rem;">
      <div class="p-3 mb-2 bg-primary text-white">
        <div class="card-body">
            <label for="">
                <center>
                <p class="card-text"></p><br>
                <p class="text-muted"></p>
                    <h3>SYARAT MASUK KE MIKO MALL<h3>
                </p>
               <img src="pedulilindungi.png" width="100" height="75">
            </center>
                <br>
            </label>
            <table>
                <tr>
                         <td>Nama Anda</td>
                         <td>:</td>
                         <td><input type='text' name= 'nama'></td>
                     </tr>
                     <tr>
                         <td>Status Vaksin</td>
                         <td>:</td>
                         <td><select name="status">
                         <option>---Status Vaksin---</option>
                         <option>Sudah Vaksin</option>    
                         <option>Belum Vaksin</option>  
                         </select></td>
                     </tr>
                     <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" name="simpan" value='KIRIM'></td>
                       </tr>
                       </body>
           </table>
    
        </div>
    </div>
</div>
</center>
</body>
<html>

<!-- PHP -->
<center>
<br>
<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $status = $_POST['status'];
   

    if($status == "Sudah Vaksin"){
        echo"Nama Anda    : $nama <br>";
        echo"Status Vaksin    : $status <br>";
        echo "<br>";
        echo"<h5>Diizinkan</h5>";

       
    }
    else if($status == "Belum Vaksin"){
      echo "<td></td>";
      echo "<td></td>";
      echo"Nama Anda    : $nama <br>";
      echo"Status Vaksin  : $status <br>";
      echo "<br>";
      echo"<h5>Tidak Diizinkan</h5>";
      echo "<br>";
      echo "<a href='https://www.pedulilindungi.id/'>Silahkan Daftar Vaksin</a>";
    }
}
?>
