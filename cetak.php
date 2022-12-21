<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Ujian</title>
        <link rel="stylesheet" href="assets/css/cetak.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script
			src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
			integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
      
       
    </head>
    <body>

    <?php 
    include 'dbconnect.php' ;
    session_start();
    $nik = $_SESSION['nik'];

    $query = "SELECT * FROM users WHERE U_NIK = $nik";
    $users = $conn->query($query);
    $users = $users->fetch_assoc();
    $u_j = $users['J_id'];

    $query = "SELECT J_jabatan FROM jabatan WHERE J_id = $u_j";
    $jabatan = $conn->query($query);
    $jabatan = $jabatan->fetch_assoc();

    $query = "SELECT B_file FROM berkas WHERE U_NIK = $nik AND B_nama = 'foto diri'";
    $foto = $conn->query($query);
    $foto = $foto->fetch_assoc();

    
    ?>

        <header>
            <h1>Cetak Kartu Ujian</h1>
            <h3>Berkas Anda telah terverifikasi. Silahkan unduh dan cetak kartu ujian Anda !</h3>
        </header>
        <div class="container">
            <div class="card my-5 pb-5" id="makepdf">

                <div class="row my-2">
                    <div class="col-4"> <img src="assets/images/logoo.png" alt="logo"></div>
                    <div class="col-8 text-center">
                        <h3>Kartu Peserta Ujian CPNS 2022</h3>
                        <h5>Formasi Lulusan Terbaik</h5>
                    </div>
                </div>
                <hr>
               
                <div>
                    <table>
                        <tr>
                            <td>Instansi</td>
                            <td>: Kementrian Kelautan dan Perikanan</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>: Pusat Pengendalian Mutu, Badan Karantina Ikan, Pengendalian Mutu dan Hasil Perikanan</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: <?= $nik; ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Peserta</td>
                            <td>: <?= $users['U_nomorPeserta']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?= $users['U_nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <?= $users['U_jenisKelamin']; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat / Tanggal Lahir</td>
                            <td>: <?= $users['U_tempatLahir']; ?> / <?= $users['U_tanggalLahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Kualifikasi Pendidikan</td>
                            <td>: <?= $users['U_pendidikan']; ?></td>
                        </tr>
                        <tr>
                            <td>Formasi Jabatan</td>
                            <td>: <?= $jabatan['J_jabatan']; ?></td>
                        </tr>
                    </table>
                    
                </div>

                <br>

                <img src="berkas/foto/<?= $foto['B_file']; ?>" alt="foto" style="width: 100px;">
                <br>
                
                <div class="qrcode" style="width:200px"></div>
               

            </div>
         
            <button type="button"  id="button" class="download">Unduh</button>

        </div>

    <script>
			const button = document.getElementById('button');

			function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('makepdf');
				// Choose the element and save the PDF for your user.
				html2pdf().from(element).save();
			}

			button.addEventListener('click', generatePDF);

        
		</script>
        <script>
            var qrcode = new QRCode(document.querySelector(".qrcode"));
            qrcode.makeCode("Why did you scanned me?");
            function generateQr() {
            qrcode.makeCode(<?= $nik; ?>);
            }
        </script>
    </body>
<html>