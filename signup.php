

<!DOCTYPE html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body>
      <div class="judul-hlm">
        <br>
        <br>
        Sign Up
        <div class="ket-hlm">Sudah memiliki akun?</div>
        <div class="ket-hlm"><a href="login.php">Masuk disini</a></div>
    </div>

    <form action="login.php" method="post" style="border:none #ccc">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Isi form berikut untuk membuat akun.</p>
          <hr>
      
          <label for="nik"><b>NIK</b></label>
          <input type="text" placeholder="Masukkan NIK" name="nik" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Masukkan Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Masukkan Password" name="psw" required>
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ingat saya
          </label>
      
          <p style="font-size: small;">Dengan membuat akun ini, anda setuju dengan ketentuan <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
            <button type="submit" id="signup" name="signup" class="signupbtn">Sign Up</button>
          </div>
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
          </div>
        </div>
      </form>

      
</body>
</html>

