<!DOCTYPE html>
<head>
    <title>Log In</title>
   <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="judul-hlm">
        <br>
        <br>
        Log In
        <div class="ket-hlm">Belum memiliki akun?</div>
        <div class="ket-hlm"><a href="signup.php">Daftar disini</a></div>
    </div>

    <form action="login.php" method="post" style="border:none #ccc">
        <div class="container">
          <h1>Log In</h1>
          <p>Masuk dengan NIK dan password yang telah terdaftar.</p>
          <hr>

          <label for="nik"><b>NIK</b></label>
          <input type="text" placeholder="Masukkan NIK" name="nik" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Masukkan Password" name="psw" required>
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ingat saya
          </label>
      
          <p style="font-size: small;">Anda telah setuju dengan ketentuan <a href="signup.php" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="submit" name="login_submit" class="signupbtn">Log In</button>
          </div>
          <div class="clearfix">
            <button type="button" class="cancelbtn">Sign Up</button>
          </div>
        </div>
      </form>
      <?php 
      include 'dbconnect.php';

      if (isset($_POST['signup'])) {
            $U_NIK = $_POST['nik'];
            $U_email = $_POST['email'];
            $U_password= $_POST['psw'];
           

            $query = "SELECT * FROM users WHERE U_NIK = $U_NIK ";
            $res = mysqli_query($conn, $query);
      
            if(!mysqli_num_rows($res))
            {

                // query SQL untuk insert data
                $query= "INSERT INTO users(U_NIK, P_id, J_id, L_id, U_nama, U_alamat, U_tempatLahir, U_tanggalLahir, U_jenisKelamin, U_nomorPeserta, U_pendidikan, U_telepon,	U_email, U_password)
                VALUES ($U_NIK, 1000, 1000, 1000, 'Default nama', 'Default alamat', 'default tempat lahir', '2000-01-01', 'L', '00000', 'Default pendidikan', 'default telp', '$U_email', '$U_password')";
        
                if (mysqli_query($conn, $query)) {
                ?>
                    <script language='javascript'>alert('Berhasil mendaftar akun');</script>
                <?php 
                } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                ?>
                    <script language='javascript'>alert('Mohon ulangi!');</script>
                <?php  
              }
            }
            else
            {
              ?>
              <script language='javascript'>alert('NIK sudah terdaftar!');</script>
              <?php 
            }
      }
      ?>

<?php 
  include 'dbconnect.php';
  if (isset($_POST['login_submit'])) {
        $NIK = $_POST['nik'];
        $password= $_POST['psw'];

        $query = "SELECT * FROM users WHERE U_NIK = $NIK AND U_password = $password ";
        $result = mysqli_query($conn, $query);
     
        if(!$result || mysqli_num_rows($result) == 0)
        {
            ?>
                <script language='javascript'>alert('Berhasil login akun!');</script>
            <?php 
            session_start();
            $_SESSION['nik'] = $_POST['nik'];
            header('Location: index.php');
        }
        else
        {
          ?>
          <script language='javascript'>alert('NIK tidak terdaftar!');</script>
          <?php 
        }
  }
  
  ?>
      
</body>
</html>