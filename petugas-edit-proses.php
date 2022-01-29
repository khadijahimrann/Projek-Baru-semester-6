<!-- Proses Update -->
<?php
    $id                = $_POST['id'];
    $nama              = $_POST['nama'];
    $jabatan           = $_POST['jabatan'];
    $no_telepon        = $_POST['no_telepon'];
    $alamat            = $_POST['alamat'];
    $username          = $_POST['username'];
    $password          = $_POST['password'];

    $query_update = mysqli_query($konek,"UPDATE petugas SET nama             = '$nama',
                                                            jabatan          = '$jabatan',
                                                            no_telepon       = '$no_telepon', 
                                                            alamat           = '$alamat', 
                                                            username         = '$username', 
                                                            password         = '$password' 
                                                            WHERE id_petugas = '$id'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        header('refresh:2; URL=http://localhost/mywebsite1-main/dashboard.php?page=petugas#');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>