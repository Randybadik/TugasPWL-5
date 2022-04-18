<?php
include("KONEKSI.PHP");
session_start();
$username=$_POST['txtUsername'];
$password=$_POST['txtPassword'];
$cek=mysqli_query($konek, "SELECT * from administrator where USERNAME='$username' and PASSWORD='$password'") or die(mysqli_error());
$data=mysqli_fetch_array($cek);
$banyak=mysqli_num_rows($cek);
if($banyak >= 1){
    $_SESSION['USERNAME']=$data['USERNAME'];
    $_SESSION['ID']=$data['ID'];
    header("Location:INDEX.PHP");
} else{ ?>
    <script type="text/javascript">
        alert("Username atau Password Salah!");
    </script>
<?php
    header("Location:LOGIN.PHP");
}

