<?php
include("KONEKSI.PHP");
$nama_nasabah= $_POST['txtNasabah'];
$alamat= $_POST['txtAlamat'];
$jenis_kelamin= $_POST['txtKelamin'];
$agama= $_POST['txtAgama'];

$simpan= mysqli_query($konek,"INSERT into nasabah(NAMA_NASABAH, ALAMAT, JENIS_KELAMIN, AGAMA)
	values('$nama_nasabah','$alamat','$jenis_kelamin', '$agama')") or die (mysqli_error());
if ($simpan) {
	header("Location:INDEX.PHP?y=NASABAH");
}