        
        <?php
            session_start();
            include("src/koneksi.php");

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT admin_username from admin WHERE admin_password ='$username' AND admin_password ='$password'";

            $hasil = mysqli_query($conn,$sql) or exit("Error query : <b>".$sql."</b>");
            if (mysqli_num_rows($hasil)>0){
                $data=mysqli_fetch_array($hasil);
                $_SESSION['username']=$data['username'];
                header("Location:admin.php");
                exit();
            }else {?>
            <script>
                alert("Username Atau Password Salah")
            </script>
            <?php
            header("Location:admin/admin.php");
                                
            }
        ?>