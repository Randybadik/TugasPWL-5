<?php
include("KONEKSI.PHP");
$nama= $_POST['txtNama'];
$username= $_POST['txtUsername'];
$password= $_POST['txtPassword'];
$simpan= mysqli_query($konek,"INSERT into administrator(NAMA,USERNAME, PASSWORD)
	values('$nama','$username','$password')") or die (mysqli_error());
if ($simpan) {
	header("Location:INDEX.PHP?y=ADMIN");
}