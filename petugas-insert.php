<?php
//   proses insert tambah data
if(isset($_POST['save']))
{
    $nama              = $_POST['nama'];
    $jabatan           = $_POST['jabatan'];
    $no_telepon        = $_POST['no_telepon'];
    $alamat            = $_POST['alamat'];
    $username          = $_POST['username'];
    $password          = $_POST['password'];

// proses enslripsi pw
$options = [
    'cost' => 12,
];
$password_encrypt = password_hash($password, PASSWORD_BCRYPT, $options);
/////////////////////

    $query_insert = mysqli_query($konek,"INSERT INTO petugas 
    VALUES('','$nama','$jabatan','$no_telepon','$alamat','$username','$password_encrypt')");
// mysql query fungsinya untuk menjalankan instruksi ke sql

if($query_insert) {
    ?>
        <div class="alert alert-success">
           Data Berhasil Disimpan !!!
        </div>
    <?php
    header('refresh:2; url=http://localhost/mywebsite1-main/dashboard.php?page=petugas#');
}  else {
    ?>
        <div class="alert alert-danger">
           Data Gagal Disimpan !!!
        </div>
    <?php
      
} 
}
?>