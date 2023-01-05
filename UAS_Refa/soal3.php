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
  
        </div>
    </nav>


      <!-- FORM-->
      <form action=""method="post">
      <center>
          <br>
      <div class="container" style="width: 50rem;">
        <div class="card-body">
            <div class="p-3 mb-2 bg-primary text-white">
            <label for="">
                <center>
                    <br>
                    <p><a href="#" class="text-dark">
                    <h2>FORM PERULANGAN<h2>
                    </a></p>
                    <table align="center">
            <tr>
                <td></td>
                <td></td>
                <td>1. Deret Bilangan Ganjil</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>2. Segitiga Sama Kaki Terbalik</td>
            </tr><tr>
                <td></td>
                <td></td>
                <td>3. Deret Bilangan Kelipatan 3</td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="number" name="pilih"></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="number" name="masukkan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="KIRIM"></td>
            </tr>
        </table>
        </div>
    </div>
</div>
    </form>
    <?php
    if (isset($_POST ['kirim'])){
        $pilih = $_POST ['pilih'];
        $angka = $_POST ['masukkan'];

        if ($pilih == 1){
            echo "<center>";
            echo "<h3>Deret Bilangan Ganjil</h3>";
            for ($x = 1; $x <= $angka; $x+=2){
                echo "$x ";
            }
            echo "</center>";
        }elseif($pilih == 2){
            echo "<center>";
            echo "<h3>Segitiga Sama Kaki Terbalik</h3>";
            for ($x = $angka; $x >= 1; $x--){
                for ($v = $angka; $v > $x; $v--){
                    echo " ";
                }for ($c = 1; $c <= $x; $c++){
                    echo "* ";
                }
                echo "<br>";
            }
            echo "</center>";
        }elseif ($pilih == 3){
            echo "<center>";
            echo "<h3>Deret Bilangan Kelipatan 3</h3>";
            for ($x = 3; $x <= $angka; $x+=3){
                echo "$x ";
            }
            echo "</center>";
        }
    }
    ?>
</body>
</html>