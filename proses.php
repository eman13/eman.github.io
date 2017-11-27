<?php
// koneksi kedatabase
include 'koneksi.php';
include 'email.php';

function newID()
{
		$sql = "SELECT max(id) as maxID FROM verifikasi_email";
		$query = mysqli_query($sql);
		$row = mysqli_fetch_assoc($query);
		$idMax = $row['maxID'];
		$noUrut = (int) substr($idMax, 3, 5);
		$noUrut++;
		$id = 'TRX' . sprintf("%05s", $noUrut);
		return $id;
}
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$id = newID();

$sql = "INSERT INTO verifikasi_email (id, nama, alamat, email) VALUES ('$id', '$nama', '$alamat', '$email')";
$query = mysqli_query($sql);
if(mysqli_query($query)){
	echo "registrasi sukses, from bukti registrasi akan dikirim ke email anda";
	kirimEmail($id, $email);
}
else echo "Registrasi Gagal";

?>