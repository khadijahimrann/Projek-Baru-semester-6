<!-- Proses Update -->
<?php
    $id             = $_POST['id'];
    $nis            = $_POST['nis'];
    $nama           = $_POST['nama'];
    $jk             = $_POST['jk'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    echo $kelas          = $_POST['kelas'];
    echo $jurusan        = $_POST['jurusan'];
    $no_telepon     = $_POST['no_telepon'];
    $alamat         = $_POST['alamat'];

    $query_update = mysqli_query($konek,"UPDATE anggota SET nis              = '$nis', 
                                                            nama             = '$nama',
                                                            jk               = '$jk',
                                                            tempat_lahir     = '$tempat_lahir', 
                                                            tanggal_lahir    = '$tanggal_lahir', 
                                                            id_kelas         = '$kelas', 
                                                            id_jurusan       = '$jurusan', 
                                                            no_telepon       = '$no_telepon', 
                                                            alamat           = '$alamat'
                                                            WHERE id_anggota = '$id'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        header('refresh:2; URL=http://localhost/mywebsite1-main/dashboard.php?page=anggota#');
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