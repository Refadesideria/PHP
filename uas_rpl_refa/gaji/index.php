<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>UAS</title>
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            
        </nav>
        
        <!-- TABLE DOSEN -->
         <center><h2>Data Gaji Karyawan<br>
         PT.Refadess</h2></center>
         <div class="container">
           <div class="card">
             <div class="card-header">
               <h3></h3>
               <center><a href="create.php" class="btn btn-primary">Add Data</a></center>
             </div>
             <div class="card-body">
               <table class="table table-striped">
                 <thead>
                   <tr>
                     <th scope="col">No</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Jabatan</th>
                     <th scope="col">Gaji</th>
                     <th scope="col">Pendidikan</th>
                     <th scope="col">Tunjangan</th>
                     <th scope="col">BPJS</th>
                     <th scope="col">Gaji Bersih</th>
                     <th scope="col">Aksi</th>
                   </t
                 </thead>
                 <tbody>
                   <?php
                   include  '../database.php';
                   $gaji = new gaji();
                   $no = 1;
                   foreach($gaji->index() as $data){
                   ?>
                   <tr>
                     <th scope="row"><?php echo $no++?></th>
                     <td><?php echo $data['nama']?></td>
                     <td><?php echo $data['jabatan']?></td>
                     <td><?php 
                     if($data['jabatan'] == "Direktur"){
                       $gaji = 10000000;
                      }else if($data['jabatan'] == "Manager"){
                        $gaji = 7500000;
                      }else if($data['jabatan'] == "Karyawan"){
                        $gaji = 5000000;
                      }else if($data['jabatan'] == "OB"){
                        $gaji = 2500000;
                      }else{
                        $gaji = 0;
                     }
                     echo $gaji?>
                     </td>
                     <td><?php echo $data['pendidikan']?></td>
                     <td><?php
                     if($data['pendidikan'] == "S1"){
                       $tunjangan = 1000000;
                      }else if($data['pendidikan'] == "SMK"){
                        $tunjangan = 750000;
                      }else if($data['pendidikan'] == "SMP"){
                       $tunjangan = 500000;
                      }else if($data['pendidikan'] == "SD"){
                        $tunjangan = 250000;
                      }else{
                        $tunjangan = 0;
                      }
                      echo $tunjangan?>
                     </td>
                     <td><?php echo $data['bpjs']?></td>
                     <td><?php 
                    $gaji_bersih = ($gaji + $tunjangan) - $data['bpjs'];
                    echo $gaji_bersih?>
                    </td>
                     <td>
                       <form action="proses.php" method="post">
                         <a href="show.php?id=<?php echo $data['id']?>" class="btn btn-warning">Show</a> ||
                         <a href="edit.php?id=<?php echo $data['id']?>" class="btn btn-success">Edit</a> ||
                         <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                         <input type="hidden" name="aksi" value="delete">
                         <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini ?')">Delete</button>
                       </form>
                     </td>
                   </tr>
                   <?php
                   }
                   ?>
                 </tbody>
               </table>
             </div>
           </div>
         </div>

        <!-- /TABLE DOSEN -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>