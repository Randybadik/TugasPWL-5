<?php
include("KONEKSI.php");
$kode= $_POST['kode'];
$nama= $_POST['txtNama'];
$username= $_POST['txtUsername'];
$password= $_POST['txtPassword'];
$simpan= mysqli_query($konek,"UPDATE administrator SET NAMA='$nama', USERNAME='$username', 
PASSWORD='$password' WHERE ID='$kode'") or die (mysqli_error());
if ($simpan) {
	header("Location:INDEX.php?z=ADMIN");
}