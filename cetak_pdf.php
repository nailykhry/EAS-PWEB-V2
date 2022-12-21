<?php
                // memanggil library FPDF
                require('fpdf185/fpdf.php');
                // intance object dan memberikan pengaturan halaman PDF
                $pdf = new FPDF('l','mm','A5');
                // membuat halaman baru
                $pdf->AddPage();
                // setting jenis font yang akan digunakan
                $pdf->SetFont('Arial','B',16);
                // mencetak string 
                $pdf->Cell(190,7,'KARTU PESERTA UJIAN CPNS 2022',0,1,'C');
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(190,7,'Formasi Lulusan Terbaik',0,1,'C');

                // Memberikan space kebawah agar tidak terlalu rapat
                $pdf->Cell(10,7,'',0,1);


                $pdf->SetFont('Arial','',10);

                include 'dbconnect.php';
                session_start();
                $nik = $_SESSION['nik'];
                $query = "SELECT * from users WHERE U_NIK = $nik";
                $users = $conn->query($query);
                $users = $users->fetch_assoc();
                
                    // $pdf->Cell(20,6,$users['U_NIK'],1,0);
                    // $pdf->Cell(85,6,$users['U_nama'],1,0);
                    // $pdf->Cell(27,6,$users['U_telepon'],1,0);
                    // $pdf->Cell(25,6,$users['U_alamat'],1,1); 
                

                $pdf->Output();
?>