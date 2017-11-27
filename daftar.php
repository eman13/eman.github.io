<html>
	<head>
    	<link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
    	<div id="konten">
        	<form method="POST" action="">
            <fieldset>
            	<legend>Form Member</legend>
                <label>username</label>
                <input type="text" name="username" />
                <label>email</label>
                <input type="text" name="email" />
                <label>password</label>
                <input type="password" name="password" />
                <input type="submit" name="submit" value="submit" />
            </fieldset>
            </form>
          </div>
       </body>
</html>
<?php
	if(isset($_POST['submit'])) {
		define('ROOT', 'https:mail.mydomain.com/vemail/');
		 $conn=mysql_connect('localhost', 'root', 'Telukna6a');
		 mysql_select_db('online2',$conn);
		
		$id = date('is');
		$kode = md5(uniqid(rand()));
		$password = md5($_POST['password']);
		
		$query = mysql_query("INSERT INTO verifikasi_email VALUES ('$id', '$_POST[username]', '$_POST[email]', '$password', 'T', '$kode')") or die (mysql_error());
		
		$to = $_POST['email'];
		$headers = "From: amdaridari@gmail.com \r\n";
		$headers .= "Reply-to: $to\r\n";
		$pesan = "Klik link berikut untuk mengaktifkan akun: ";
		$pesan .= ROOT."confirm.php?email=".$_POST['email']."&kode=$kode&username=".$_POST['username'];
		
		
		$a = @mail($to, "Aktivasi Akun Anda", $pesan, $headers);
		if($a AND $query)
		{
			echo "<script language='javascript'>alert('Cek Email Anda')";
		}
		else
		{
			echo "Gagal Dikirim";
		}
	}
?>