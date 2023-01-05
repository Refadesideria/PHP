<?php
include '../database.php';
$gaji = new gaji();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $no   = $_POST['no'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $bpjs = $_POST['bpjs'];

    if ($aksi == "create"){
        $gaji->create($nama,$jabatan,$pendidikan,$bpjs);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $gaji->update($no, $nama, $jabatan, $pendidikan, $bpjs);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $gaji->delete($no);
        header("location:index.php");
    }
}
?>