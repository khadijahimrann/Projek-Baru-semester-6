<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <center><h2>Form Edit Data Anggota</h2></center>
        <!-- Proses query untuk menampilkan data yang mau di edit -->
        <?php
            $id = $_GET['id'];
            // $query = mysqli_query($konek,"SELECT * FROM anggota WHERE id_anggota = '$id'");
            $query = mysqli_query($konek,"SELECT anggota.id_anggota, anggota.nis, anggota.nama, anggota.jk, anggota.tempat_lahir, anggota.tanggal_lahir,
        anggota.id_kelas, anggota.id_jurusan, anggota.no_telepon, anggota.alamat, kelas.id_kelas, kelas.nama_kelas,
        jurusan.id_jurusan, jurusan.nama_jurusan
        FROM anggota
        JOIN kelas ON anggota.id_kelas = kelas.id_kelas
        JOIN jurusan ON anggota.id_jurusan = jurusan.id_jurusan");
            foreach ($query as $row) {
        ?>
        <!-- -------------------------------------------------- -->
        <form action="?page=anggota-edit-proses" method="POST">
            <!-- tambahkan input hidden untuk menyisipkan id anggota yg mau diedit, dibutuhkan pada saat edit proses query -->
            <input value="<?php echo $row['id_anggota'] ?>" class="form-control" type="hidden" name="id">
            <!-- --------------------------------------------------------------------------------------------------------- -->
            <div class="form-group">
                <label for="">NIS</label>
                <input value="<?php echo $row['nis'] ?>" class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
            </div>
            <div class="form-group mt-2">
            <label for="">Nama</label>
                <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Gender</label>
                <select class="form-control" name="jk">
                    <option value="<?php echo $row['jk'] ?>"><?php echo $row['jk'] ?></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Tempat Lahir</label>
                <input value="<?php echo $row['tempat_lahir'] ?>" class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group mt-2">
                <label for="">Tanggal Lahir</label>
                <input value="<?php echo $row['tanggal_lahir'] ?>" class="form-control" type="date" name="tanggal_lahir">
            </div>
            <div class="form-group mt-2">
                <label for="">Kelas</label>
                <select class="form-control" name="kelas" required>
                    <option value="<?php echo $row['id_kelas'] ?>"><?php echo $row['nama_kelas'] ?></option>
                    <?php
                    $query_kelas = mysqli_query($konek,"SELECT * FROM kelas");
                    foreach ($query_kelas as $kelas) {
                        ?>
                        <option value="<?php echo $kelas["id_kelas"]?>">
                            <?php echo $kelas["nama_kelas"]?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Jurusan</label>
                <select class="form-control" name="jurusan" required>
                    <option value="<?php echo $row['id_jurusan'] ?>"><?php echo $row['nama_jurusan'] ?></option>
                    <?php
                    $query_jurusan = mysqli_query($konek,"SELECT * FROM jurusan");
                    foreach ($query_jurusan as $jurusan) {
                        ?>
                        <option value="<?php echo $jurusan["id_jurusan"]?>">
                            <?php echo $jurusan["nama_jurusan"]?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
                        
            <div class="form-group mt-2">
                <label for="">Nomor Telepon</label>
                <input value="<?php echo $row["no_telepon"]?>" class="form-control" type="text" name="no_telepon" placeholder="Nomor Telepon">
            </div>
            <div class="form-group mt-2">
                <label for="">Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row["alamat"]?></textarea>
            </div>
            <br>
            <center>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </center>
            <br>
        </form>
        <?php
        }
        ?>
    </div>
    <div class="col-3"></div>
</div>