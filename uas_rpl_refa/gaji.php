<?php


class Gaji extends Database
{

    // menampilkan data gaji ke index.php
    public function index()
    {
        $datagaji = mysqli_query($this->koneksi, "select * from gaji");

        return $datagaji;
    }

    public function create($nama, $jabatan, $pendidikan, $bpjs)
        {

            if($jabatan == "Direktur"){
                $gaji = 10000000;
               }else if($jabatan == "Manager"){
                 $gaji = 7500000;
               }else if($jabatan == "Karyawan"){
                 $gaji = 5000000;
               }else if($jabatan == "OB"){
                 $gaji = 2500000;
               }else{
                 $gaji = 0;
              }
    
            if($pendidikan == "S1"){
                $tunjangan = 1000000;
               }else if($pendidikan == "SMK"){
                 $tunjangan = 750000;
               }else if($pendidikan == "SMP"){
                $tunjangan = 500000;
               }else if($pendidikan == "SD"){
                 $tunjangan = 250000;
               }else{
                 $tunjangan = 0;
               }
    
            $gaji_bersih = ($gaji + $tunjangan) - $bpjs;

        mysqli_query($this->koneksi,
        
        "insert into gaji values (null, '$nama', '$jabatan','$gaji', '$pendidikan', '$tunjangan', '$bpjs', '$gaji_bersih')");


        }


    // memilih data gaji yang akan diubah
        public function edit($id)
        {
            $datagaji = mysqli_query($this->koneksi, 
                        "select * from gaji  where id='$id'"
                    );

            return $datagaji;
        }
        // merubah data gaji
        public function update($id, $nama, $jabatan, $pendidikan, $bpjs)
        {
            mysqli_query(
                $this->koneksi,
                "update gaji set nama='$nama' , jabatan='$jabatan', pendidikan='$pendidikan', bpjs='$bpjs' where id='$id'"
            );
        }

        // menampilkan data gaji berdasarkan id
        public function show($id)
        {
            $datagaji = mysqli_query($this->koneksi, 
                        "select * from gaji where id='$id'"
                    );

            return $datagaji;
        }

        // menghapus data dosen
         public function delete($id)
         {
             mysqli_query($this->koneksi, "delete from gaji where id='$id'"
                     );
 
         }
}
?>