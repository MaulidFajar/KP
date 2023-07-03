<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- tab icon -->
        <link rel="icon" type="image/png" href="../public/img/icon/tab-icon-16x16.png" sizes="16x16">

        <title>Admin Page | Disperakim</title>

    <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Vanilla CSS -->
        <link rel="stylesheet" href="../public/css/login.css"">

  </head>
  <body>
<section id="login">
            <div class="row">
                <div class="col">
                    <div id="card" class="login-card mx-auto">
                        <div id="card-title" class="card-header">
                            <h2 class="text-center text-black">LOGIN</h2>
                        </div>
                        <form method="POST" class="form mx-auto">
                            <div class="mb-4 group">
                                <input type="text" class="form-control shadow-none input-field " id="user-id" name="username" placeholder="" autocomplete="off" required/>
                                <label for="username" class="ps-0 input-label">Username</label> 
                            </div>
                            <div class="mb-2 group">
                                <input type="password" class="form-control shadow-none input-field" id="user-password" name="password" placeholder="" autocomplete="off" required/>
                                <label for="user-password" class="ps-0 input-label">Password</label>
                            </div>
                            <p class="error-message">*</p>
                            <?php
                                if (isset($_POST['username']) && isset($_POST['password'])) {
                                $uname = $_POST['username'];
                                $password = $_POST['password'];

                                //Username//
                                $uname_valid = 'admin';
                                $password_valid = 'admin';

                                // Cek Login
                                if ($uname == $uname_valid && $password == $password_valid) {
                                header('Location: admin.php');
                                }else if ($uname !== $uname_valid && $password == $password_valid) {
                                    // Jika tidak sesuai, tampilkan pesan kesalahan
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").innerHTML = "username yang anda masukkan salah" });</script>';
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").style.display = "block"; });</script>';
                                    // Hilangkan pesan kesalahan setelah 2 detik
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").style.display = "none"; }, 1000);</script>';

                                }else if ($uname == $uname_valid && $password !== $password_valid){
                                     // Jika tidak sesuai, tampilkan pesan kesalahan
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").innerHTML = "password yang anda masukkan salah" });</script>';
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").style.display = "block"; });</script>';
                                    // Hilangkan pesan kesalahan setelah 2 detik
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").style.display = "none"; }, 1000);</script>';

                                }else{
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").innerHTML = "username dan password<br>yang anda masukkan salah" });</script>';
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").style.display = "block"; });</script>';
                                    // Hilangkan pesan kesalahan setelah 2 detik
                                    echo '<script>setTimeout(function() { document.querySelector(".error-message").style.display = "none"; }, 1000);</script>';

                                }
                            }
                            ?>
                            <input id="submit-btn" class="btn button-login mt-3 mb-5" type="submit" name="submit" value="Sign in"/>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>