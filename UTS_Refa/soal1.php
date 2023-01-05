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
  <body style="background-color: #f9eac3; border: 3px solid pastel">
  <nav class="navbar navbar-expand-lg navbar" style="background-color: #FFC0CB; border: 3px solid pink" >
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="80" height="70" alt="">
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home  </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="soal1.php">Soal 1 </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="datanilai2.php">Data Nilai </a>
      </li>
    </form>
  </div>
</nav>
<!-- CARD -->

<center>
    <br>
<img src="logo.png" width="270" height="200";><br>
<h2>
 Penilaian Mata Pelajaran Produktif
  <small class="text-muted"></small>
</h2>

<br>
<center>
<form action="" method="post">
    <div class="card" style="max-width: 35rem;">
    <div class="card-header">Masukkan Jumlah Siswa
    <div class="card-body">
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
        <input input type="number" name="jumlah">
        <div id="" class="form-text">
        <input type="submit" name ="proses" value="Proses" class="btn btn-primary">
        </div>
        <br>
        <br>
      </div>
    </div>
    </form>
    <br><br>
    <?php

    if (isset($_POST['proses'])) {
    $jumlah = $_POST['jumlah'];
    ?>

    <form action="datanilai2.php" method="post">
    <?php
      for ($i = 1; $i <= $jumlah; $i++) {
    ?>
    
    <div align = "left" class="card" style="max-width: 40rem;">
    <div class="card-header">
      Data Siswa Ke - <?php echo $i; ?>
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">No</p>
        <input type="text" id="" class="form-control" aria-describedby="" name="no[]">
        <div id="" class="form-text">
        </div>
        <p class="card-text">Nama</p>
        <input type="text" id="" class="form-control" aria-describedby="" name="nama[]">
        <div id="" class="form-text">
        </div>

        <p class="card-text">Kelas</p>
        <input type="text" id="" class="form-control" aria-describedby="" name="kelas[]">
        <div id="" class="form-text">
        </div>
        <br>
        <br>
         
        <center>
        <h4><i>Nilai Produktif</h4></i>
      </center>
     
        <br>
        <br>

        <p class="card-text">Nilai Bulanan(35%)</p>
        <input type="text" id="" class="form-control" aria-describedby="" name="bulanan[]">
        <div id="" class="form-text">
        </div>

        <p class="card-text">Nilai PTS(15%)</p>
        <input type="text" id="" class="form-control" aria-describedby="" name="pts[]">
        <div id="" class="form-text">
        </div>

        <p class="card-text">Nilai PAS(20%)</p>
        <input type="text" id="" class="form-control" aria-describedby="" name="pas[]">
        <div id="" class="form-text">
        </div>

        <p class="card-text">Nilai Kehadiran(30%)</p>
        <input type="text" id="" class="form-control" aria-describedby="" name="kehadiran[]">
        <div id="" class="form-text">
        </div>
      <?php
      }
      ?>
        <br>
        <center>
        <input type="submit" name ="simpan" value="Proses" class="btn btn-primary">
    </center>
      </div>
      </div>
      </form>
      <?php
      }
      ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
-->
</body>
</html>