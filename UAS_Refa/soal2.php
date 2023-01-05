<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
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
      <div class="container">
          &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; 
        <div class="card-body">
        <div class="card-body">
            <div class="p-3 mb-2 bg-primary text-white">
            <label for="">
                <center>
                    <br>
                    <p><a href="#" class="text-dark">
                    <h2>Penggajihan Karyawan<h2><br>
                    <h1>PT.Selalu Makmur Jaya</h1>
                    </a></p>
                    <table align="center">
        </a></p>
        <table align="center">
            <tr>
                <td>Nama Bendahara</td>
                <td>:</td>
                <td><input type="text" name="bendahara"></td>
            </tr>
            <tr>
                <td>Nama Pekerja</td>
                <td>:</td>
                <td><input type="text" name="pekerja"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="laki laki">Laki-Laki
            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><input type="date" name="tanggal_gaji"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><select name="jabatan" id="">
                    <option value="Manager">Manager</option>
                    <option value="Direktur">Direktur</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="OB">OB</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikan" id="">
                    <option value="SD">SD</option>
                    <option value="SMA">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                </select></td>
            </tr>
            <tr>
                <td>Lembur</td>
                <td>:</td>
                <td><input type="text" name="lembur">Hari/ RP.20.000</td>
            </tr>
            <tr>
                <td>Potongan</td>
                <td>:</td>
                <td><input type="number" name="potongan"></td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="KIRIM" name="kirim"></td>
        </tr>

        </table>
        </div>
    </div>
</div>
    </center>
</body>
</html>
    <?php

if(isset($_POST ['kirim'])){
    $bendahara = $_POST ['bendahara'];
    $pekerja = $_POST ['pekerja'];   
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $tanggal_gaji = $_POST ['tanggal_gaji'];
    $jabatan = $_POST ['jabatan'];
    $pendidikan = $_POST ['pendidikan'];
    $lembur = $_POST ['lembur'];
    $potongan = $_POST ['potongan'];

    if ($jabatan == "Direktur"){
        $gaji = 10000000;
    }elseif($jabatan == "Manager"){
        $gaji = 7500000;
    }elseif($jabatan == "Karyawan"){
        $gaji = 5000000;
    }elseif($jabatan == "OB"){
        $gaji = 2500000;
    }

    if ($pendidikan == "SD"){
        $tunjangan = 200000;
    }elseif ($pendidikan == "SMP"){
        $tunjangan = 500000;
    }elseif ($pendidikan == "SMA"){
        $tunjangan = 1000000;
    }elseif ($pendidikan == "S1"){
        $tunjangan = 1500000;
    }

    $vakasi = $lembur * 20000;
    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
    echo "<center>";
    echo "<br>";
    echo "<h1>Struk Gaji Karyawan</h1>";
    echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------";
    echo "</center>";
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td></td><td></td><td><p align=right>Date : $tanggal_gaji</p></td> ";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Gaji Pokok</h3></td>";
    echo "</tr>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Karyawan </td><td>:</td><td>$pekerja</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin </td><td>:</td><td>$jenis_kelamin</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir </td><td>:</td><td>$pendidikan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jabatan </td><td>:</td><td>$jabatan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Gaji </td><td>:</td><td>Rp. $gaji</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Tunjangan</h3></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tunjangan Pendidikan </td><td>:</td><td>Rp. $tunjangan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Vakasi Lembur </td><td>:</td><td>Rp. $vakasi</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Potongan</h3></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Potongan </td><td>:</td><td>Rp. $potongan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Total Gaji</h3></td><td>:</td><td>Rp. $total</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td><td></td><td><p align=right>Bendahara : $bendahara</p></td> ";
}
?>