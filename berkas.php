<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Ujian</title>
        <!--  -->
        <!-- ***** Header ***** -->
        <?php include('header.php') ?>
        <link rel="stylesheet" href="assets/css/berkas.css">
    </head>
    <body>

    <?php
// Load file koneksi.php
include "dbconnect.php";
// Ambil Data yang Dikirim dari Form
session_start();

// FOTO
if (isset($_POST['simpanFoto'])){
    $nik =  $_SESSION['nik'];


    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];


    // Set path folder tempat menyimpan fotonya
    $fotobaru = date('dmYHis').$foto;
    $path_foto = "berkas/foto/".$fotobaru;

    // Proses upload
    move_uploaded_file($_FILES['foto']['tmp_name'], $path_foto);
    $sql_query = "INSERT INTO berkas(U_NIK, B_nama, B_file) VALUES('$nik','foto diri','$fotobaru')";

    if (mysqli_query($conn, $sql_query)) {
        ?>
            <script language='javascript'>alert('Berhasil mengunggah foto');</script>
        <?php 
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?>
            <script language='javascript'>alert('Mohon ulangi!');</script>
        <?php  
    }
}


// IJAZAH
if (isset($_POST['simpanIjazah'])){

    $nik =  $_SESSION['nik'];


    $ijazah = $_FILES['ijazah']['name'];
    $tmp_ijazah = $_FILES['ijazah']['tmp_name'];


    // Set path folder tempat menyimpan fotonya
    $ijazahbaru = date('dmYHis').$ijazah;
    $path_ijazah = "berkas/ijazah/".$ijazahbaru;

    // Proses upload
    move_uploaded_file($_FILES['ijazah']['tmp_name'], $path_ijazah);
    $sql_query = "INSERT INTO berkas(U_NIK, B_nama, B_file) VALUES('$nik','ijazah','$ijazahbaru')";

    if (mysqli_query($conn, $sql_query)) {
        ?>
            <script language='javascript'>alert('Berhasil mengunggah ijazah');</script>
        <?php 
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?>
            <script language='javascript'>alert('Mohon ulangi!');</script>
        <?php  
    }
}


// cv
if (isset($_POST['simpanCV'])){

    $nik =  $_SESSION['nik'];


    $cv = $_FILES['cv']['name'];
    $tmp_cv = $_FILES['cv']['tmp_name'];


    // Set path folder tempat menyimpan fotonya
    $cvbaru = date('dmYHis').$cv;
    $path_cv = "berkas/cv/".$cvbaru;

    // Proses upload
    move_uploaded_file($_FILES['cv']['tmp_name'], $path_cv);
    $sql_query = "INSERT INTO berkas(U_NIK, B_nama, B_file) VALUES('$nik','cv','$cvbaru')";

    if (mysqli_query($conn, $sql_query)) {
        ?>
            <script language='javascript'>alert('Berhasil mengunggah cv');</script>
        <?php 
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?>
            <script language='javascript'>alert('Mohon ulangi!');</script>
        <?php  
    }
}


// transkip nilai
if (isset($_POST['simpanTranskip'])){

    $nik =  $_SESSION['nik'];


    $transkip = $_FILES['transkipNilai']['name'];
    $tmp_transkip = $_FILES['transkipNilai']['tmp_name'];


    // Set path folder tempat menyimpan fotonya
    $transkipbaru = date('dmYHis').$transkip;
    $path_transkip = "berkas/transkipNilai/".$transkipbaru;

    // Proses upload
    move_uploaded_file($_FILES['transkipNilai']['tmp_name'], $path_transkip);
    $sql_query = "INSERT INTO berkas(U_NIK, B_nama, B_file) VALUES('$nik','transkip','$transkipbaru')";

    if (mysqli_query($conn, $sql_query)) {
        ?>
            <script language='javascript'>alert('Berhasil mengunggah transkip');</script>
        <?php 
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?>
            <script language='javascript'>alert('Mohon ulangi!');</script>
        <?php  
    }
}


// sertifikat
if (isset($_POST['simpanSertifkat'])){

    $nik =  $_SESSION['nik'];


    $sertifikat = $_FILES['sertifikat']['name'];
    $tmp_sertifikat = $_FILES['sertifikat ']['tmp_name'];


    // Set path folder tempat menyimpan fotonya
    $sertifikatbaru = date('dmYHis').$sertifikat ;
    $path_sertifikat = "berkas/sertifikat/".$sertifikatbaru;

    // Proses upload
    move_uploaded_file($_FILES['sertifikat']['tmp_name'], $path_sertifikat );
    $sql_query = "INSERT INTO berkas(U_NIK, B_nama, B_file) VALUES('$nik','sertifikat','$sertifikatbaru')";

    if (mysqli_query($conn, $sql_query)) {
        ?>
            <script language='javascript'>alert('Berhasil mengunggah sertifikat');</script>
        <?php 
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?>
            <script language='javascript'>alert('Mohon ulangi!');</script>
        <?php  
    }
}

?>
        <header>
            <h1>Upload Berkas</h1>
            <h3>Silahkan Upload Berkas Anda !</h3>
        </header>
        <div class="fieldset">
            <form action="berkas.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label"><b>Foto Diri (4x6)</b></label>
                    <div class="col-sm-10">
                        <input type="file" name = "foto" class="form-control" id="foto" >
                    </div>
                </div>
                <button type="submit" name="simpanFoto" class="submit">Simpan</button>
            </form>

            <form action="berkas.php" method="post" enctype="multipart/form-data">         
                <div class="form-group row">
                    <label for="ijazah" class="col-sm-2 col-form-label"><b>Ijazah</b></label>
                    <div class="col-sm-10">
                        <input type="file" name="ijazah" class="form-control" id="ijazah">
                    </div>
                </div>
                <button type="submit" name="simpanIjazah" class="submit">Simpan</button>
            </form>

            <form action="berkas.php" method="post" enctype="multipart/form-data">  
                <div class="form-group row">
                    <label for="cv" class="col-sm-2 col-form-label"><b>CV</b></label>
                    <div class="col-sm-10">
                        <input type="file" name="cv" class="form-control" id="cv">
                    </div>
                </div>
                <button type="submit" name="simpanCV" class="submit">Simpan</button>  
            </form>

            <form action="berkas.php" method="post" enctype="multipart/form-data">  
                <div class="form-group row">
                    <label for="transkipNilai" class="col-sm-2 col-form-label"><b>Transkip Nilai</b></label>
                    <div class="col-sm-10">
                        <input type="file" name="transkipNilai" class="form-control" id="transkipNilai">
                    </div>
                </div>
                <button type="submit" name="simpanTranskip" class="submit">Simpan</button>
            </form>
            
            <form action="berkas.php" method="post" enctype="multipart/form-data">  
                <div class="form-group row">
                    <label for="sertifikat" class="col-sm-2 col-form-label"><b>Sertifikat Akreditasi</b></label>
                    <div class="col-sm-10">
                        <input type="file" name="sertifikat" class="form-control" id="sertifikat">
                    </div>
                </div>
                <button type="submit" name="simpanSertifkat" class="submit">Simpan</button>
            </form>
            <button type="button"  class="btn btn-danger rounded-lg" onclick="goToIndex()">Back</button>
        </div>
        <script>
            function goToIndex()
            {
                window.location.href = "index.php";
            }
        </script>
    </body>
<html>

