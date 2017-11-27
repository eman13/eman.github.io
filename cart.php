<title>Penyewaan</title>
<link href="logotenda.png" rel="icon">

<?php 
    
    require_once "koneksi.php";
    $sid = session_id();
    
    $error = "";
    $sql ="SELECT * FROM keranjang2 WHERE id_session='$sid'";
    $query = mysqli_query($koneksi, $sql);
    $row= mysqli_fetch_assoc($query);

    $id= $row['id'];
    $banyak = $row['jumlah'];
    
    if(isset($_POST['submit'])){
        
        
        $pembeli = $_POST['pembeli'];
        $alamat = $_POST['alamat'];
		$tgl = $_POST['tanggal'];
        $tanggal = date('Y-m-d', strtotime($tgl));
        $telepon = $_POST['telepon'];
		$warna = $_POST['warna'];
        $ket = $_POST['keterangan'];
        $rek = $_POST['rekening'];
        
        $query = "INSERT INTO pembelian (pembeli, alamat, telepon, banyak, warna, ket, rek, id, id_session, tanggal) VALUES('$pembeli', '$alamat', '$telepon', '$banyak', '$warna', '$ket', '$rek', '$id', '$sid', '$tanggal')";
        if(mysqli_query($koneksi, $query)){  
            $del = "DELETE FROM keranjang2 WHERE id_session='$sid'";
            mysqli_query($koneksi, $del);
            header('Location: transaksi.php');
         
        }else{
            $error = "errororor";
        }
        
    }
        
?>
<div class="cart">
    <div id="cart">
        <p>Produk Pemesanan Anda</p>
    </div>
        <table border="1">
            <tr>
                <th>Nama Produk</th>
                <th>Jumlah / Hari</th>
                <th>Harga</th>
                <th>Subtotal</th>
<!--
                <th></th>
                <th></th>
                <th></th>
-->
            </tr>
            <?php
            $sid = session_id();
            
            $iner = "SELECT * FROM keranjang2, barang WHERE id_session='$sid' AND barang.id=keranjang2.id";
            $tmp = mysqli_query($koneksi, $iner);
            $total = 0;
            while($t= mysqli_fetch_assoc($tmp)):
            
            $subtotal = $t['jumlah'] * $t['harga'];
            ?>
            <tr>
                <td><?= $t['nama_barang'];?></td>
                <td><?= $t['jumlah'];?></td>
                <td><?= number_format($t['harga'],0, ',', '.'); ?></td>
                <td><?= number_format($subtotal,0,',','.');?></td>
            <?php $total += $subtotal; ?>

            </tr>
            <?php endwhile;?>
        </table> 
        
        <p class="total"><b>Total Belanja Anda : Rp. <?= number_format($total,0, ',', '.');?></b></p><br>
<form action="" method="post">
    <center><h1 style="color: #ca4f6c">Form Pemesanan</h1></center>
    <label>Nama Penyewa</label><br>    
    <input type="text" name="pembeli" required placeholder="Masukan Nama Anda"><br><br><br>
    
    <label>Alamat</label><br>
    <textarea name="alamat" required placeholder="Masukan Alamat Anda"></textarea><br>
    <br><br>
    <td>Tanggal Acara </td><br>
      <input type="date" name="tanggal"><br><br>
    <label>No Telepon</label><br>
    <input type="text" name="telepon" required placeholder="Masukan No telpon anda"><br>
<br><br>

    <label>Warna Tenda</label><br>
    <select name="warna">
    <option value="Pilih Warna" selected="selected">-- Pilih Warna Untuk Tenda --</option>
    <option value="Merah-hitam" >Merah-hitam</option>
    <option value="Merah-Putih" >Merah-Putih</option>
    <option value="Pink-Putih" >Pink-Putih</option>
    <option value="Pink-Hijau" >Pink-hijau</option>
    <option value="Gold" >Gold</option>
    <option value="Gold-Putih" >Gold-Putih</option>
    <option value="Hitam-Hijau" >Hitam-Hijau</option>
    <option value="Biru-merah" >Biru-Merah</option>
    <option value="Biru-Hijau" >Biru-Hijau</option>
    </select><br><br><br>
    
    <label>Keterangan</label><br>
    <input type="text" name="keterangan" placeholder="Masukan Keterangan Jika Ingin Anda Tambahkan"/><br><br><br>
    
    <label>Rekening Bank</label>
    <select name="rekening">
        <option value="" selected="selected">-- Pilih Rekening Pembayaran --</option>
        <option value="0928-2334-2093-2390 (BCA)" >BCA</option>
        <option value="2334-1234-4343-3452 (BNI)" >BNI</option>
        <option value="2343-2349-0902-3294 (BRI)" >BRI</option>
    </select><br><br>
    
    <div class="error"><br>
        <?= $error; ?>
    </div><br>
    <input type="submit" name="submit" value="Selesai">
    
</form> 

<style media="screen">
    *{
        font-family: verdana;
    }
    .total{
        margin-top: 12px;
        font-size: 14px;
    }
    td a{
        text-decoration: none;
        color: white;
    }
    .aksi{
        width: 60px;
        height: 20px;
        line-height: 20px;
        text-align: center;
    }
    #cart p{
        margin: 0 auto;
        text-align: center;
        font-size: 20px;
        color: #ca4f6c;
        
    }
    .cart{
        border-radius: 2px;
    }
    .cart{
        width: 60%;
        height: 900px;
        margin: 0 auto;
        margin-top: 50px;
        border: 1px solid #ddd;
        padding: 20px;
        padding-left: 100px;
    }
    table{
        margin-top: 12px;
        border-collapse: collapse;
        width: 90%;
    }
    td, th{
        border: 1px solid #ddd;
        height: 30px;
        padding: 5px;
        font-size: 14px;
        padding-left: 15px;
    }
    .error{
        color: red;
    }
    .produk{
        float:right;
        margin: 2.5% 0;
        margin-right: 10%;
    }
    form{
        width: 70%;
        height: 550px;
        margin: 0 auto;
        background: none;
        border-radius: 4px;
        padding: 20px;
        font-size: 12px;
    }
    input[type=submit]:hover{
        background: #45a049;
    }
    input[type=submit]{
        color: white;
        cursor: pointer;
        display: inline-block;
        float: left;
        border: none;
        background: #4CAF50;
        width: 100%;
        height: 40px;
        border-radius: 4px;
    }
    input[type=text], input[type=number], input[type=date], textarea, select {
        display: inline-block;
        float: left;
        width: 100%;
        font-size: 12px;
        height: 40px;
        border-radius: 4px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        padding: 10px;
        margin-bottom: 12px;
    }
</style>