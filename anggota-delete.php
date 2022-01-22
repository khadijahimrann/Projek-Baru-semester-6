<?php
// Proses Delete Data
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($konek,"DELETE FROM anggota WHERE id_anggota = '$id'");
    if ($query_delete) {
        ?>
        <div class="alert alert-success">
           Data Berhasil Dihapus !!
        </div>
        <?php
        header('refresh:2; url=http://localhost/mywebsite1-main/dashboard.php?page=anggota#');
    }
}
?>