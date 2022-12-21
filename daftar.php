<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Ujian</title>
        <!-- ***** Header ***** -->
        <?php include('header.php') ?>
        <link rel="stylesheet" href="assets/css/daftar.css">        
    </head>
    <body>
        <!-- SESSION -->
        <?php include 'dbconnect.php'; ?>
        <?php session_start(); ?>

        <header>
            <h1>Daftar Ujian</h1>
            <h3>Silahkan lengkapi data diri Anda !</h3>
        </header>
        <form action="daftar.php"  method="post">
            <div class="fieldset">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name ="name" id="name" placeholder="Nama">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name ="tempatLahir" id="tempatLahir" placeholder="Tempat Lahir">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggalLahir" id="tanggalLahir" placeholder="Tempat Lahir">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="laki" value="L" checked>
                                <label class="form-check-label" for="laki">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="P">
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                    </div>
                </div>
                

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                        <select name="jabatan" id="jabatan" >  
                            <?php while ($row = $jabatan->fetch_assoc()) { ?>
                            <option value="<?= $row['J_id']; ?>">
                            <?= $row['J_id']; ?> | <?= $row['J_jabatan']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
             

                <div class="form-group row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Kualifikasi Pendidikan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Kualifikasi Pendidikan">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name = "telepon" id="telepon" placeholder="Nomor Telepon">
                    </div>
                </div>
                <button type="submit" name="simpan_pendaftaran" class="submit">Simpan</button>
                </div>
            </div>
            </form>
            <button type="button"  class="btn btn-danger rounded-lg" onclick="goToIndex()">Back</button>
        </div>


        <?php 
        if(isset($_POST['simpan_pendaftaran'])){
            $nama               = $_POST['name'];
            $tempatLahir        = $_POST['tempatLahir'];
            $tanggalLahir       = $_POST['tanggalLahir'];
            $jenisKelamin       = $_POST['jenisKelamin'];
            $alamat             = $_POST['alamat'];
            $pendidikan         = $_POST['pendidikan'];
            $telepon            = $_POST['telepon'];
            $jabatan            = $_POST['jabatan'];
            $SESSION           = $_SESSION['nik'];

            // query SQL untuk insert data
            $query="UPDATE users SET U_nama='$nama', U_tempatLahir='$tempatLahir',
                    U_tanggalLahir='$tanggalLahir', U_jenisKelamin='$jenisKelamin', U_alamat='$alamat',
                    U_pendidikan='$pendidikan', U_telepon='$telepon', J_id='$jabatan'
                    where U_NIK = $SESSION";


            if (mysqli_query($conn, $query)) {
            ?>
                <script language='javascript'>
                    alert('Berhasil mendaftar ujian, segera unggah berkas!');
                    window.location.href = 'index.php';
                </script><?php 
                
            } else {
            ?>

                <script language='javascript'>
                    alert('Mohon ulangi!');
                </script>

            <?php 
            }
        }
        ?>
        

        <script>
            function goToIndex()
            {
                window.location.href = "index.php";
            }
        </script>

    </body>
<html>



