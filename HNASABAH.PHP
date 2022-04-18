<?php
include ("KONEKSI.PHP");
$id = $_GET['ID_NASABAH'];
$hapus=mysqli_query($konek,"DELETE FROM nasabah WHERE ID_NASABAH='$id'");
if($hapus) {
	header("Location:INDEX.PHP?y=nasabah");
}
