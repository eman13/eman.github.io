 
<?php 
    require_once "koneksi.php";
    require_once "header.php";
    if(!$_SESSION['nama']){
        header('Location: login.php');
    }
        $sid = session_id();
        
        $perPage = 10;
        $page = isset($_GET["hal"]) ? (int)$_GET["hal"] : 1;
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;   

        $sel = "SELECT * FROM barang, pembelian WHERE pembelian.id=barang.id LIMIT $start, $perPage";
        $tmp = mysqli_query($koneksi, $sel);

        $a = "SELECT * FROM barang, pembelian WHERE pembelian.id=barang.id";
        $b = mysqli_query($koneksi, $a);
        $total = mysqli_num_rows($b);

        $pages = ceil($total/$perPage);

            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $search = "SELECT * FROM barang, pembelian WHERE pembelian.id=barang.id AND pembeli LIKE '%$cari%'";
                $tmp = mysqli_query($koneksi, $search);
            }
?>
<head>
<title>Dashboard Admin</title>
</head>
    <h1 style="color: #ca4f6c; font-size: 23px; margin-left: 35%; margin-top: 60px;">Data Pemesanan</h1><br><br>
    <div class="dash-1">
    <div class="menu-barang">
    <a href="dashboard.php">Dashboard</a>
</div>
    <div class="menu-barang">
    <a href="barang.php">Data Produk</a>
</div>
        <div class="menu-barang">
    <a href="pemesan.php">Data Pemesan</a>
</div>
        <br><br><br>
    <div class="search">
        <form action="" method="get">
        <input type="search" name="cari" placeholder="Cari nama penyewa disini ...">
        
        </form>    
    </div>
<!--    <h1 style="font-size: 22px; color:#ca4f6c;">Data Pemesanan  </h1><br>-->
    <table border="1">
            <tr>
            <th>Foto</th> 
            <th>Nama Penyewa</th>
            <th>Alamat</th> 
            <th>Barang</th> 
            <th>No Telepon</th> 
            <th>Jumlah Hari</th> 
            <th>Rekening Bank</th> 
            <th>Banyak Barang</th> 
            <th>Harga</th> 
            <th>Subtotal</th> 
       </tr>
        <?php 
        $total = 0;
        while($row= mysqli_fetch_assoc($tmp)):?>
        <tr>
            <td><img src="<?= "images2/".$row['foto'];?>" width="50" height="50"></td>
            <td><?= $row['pembeli'];?></td>
            
            <td><?= $row['alamat'];?></td>
            <td><?= $row['nama_barang'];?></td>
            <td><?= $row['telepon'];?></td>
            <td><?= $row['rek'];?></td>
            <td><?= $row['banyak'];?> barang</td>
            <td>Rp. <?= number_format($row['harga'], 0, ',', '.');?></td>
            <?php $subtotal = $row['banyak'] * $row['harga'];?>
            <td>Rp. <?= number_format($subtotal,0,',','.');?></td>
            <?php $total = $total + $subtotal;?>
            <td><a href="del_pesan.php?id= <?= $row['id'];?>" onclick="return confirm('Anda Yakin Akan menghapus data ini?');"><p class="aksi" style="background: #e33f3f;">Hapus</p></a></td>
        </tr>
        <?php endwhile; ?>
    </table>
    
        <div class="tombol">
            <?php for($i=1; $i<=$pages; $i++){?>
            <a href="?hal= <?= $i; ?>"><?= $i; ?></a>
            <?php } ?>
        </div>
</div>
<?php require_once "footer.php";?>
<style media="screen">
    *{
        font-family: verdana; 
    }
    .tombol{
        margin-left: 40%;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .tombol a{
        margin-left: 5px;
        text-decoration: none;
        color: black;
        float: left;
        width :20px;
        height: 20px;
        border: 1px solid red;
        text-align: center;
        line-height: 20px;
        border-radius: 2px;
    }
    .tombol a:hover{
        background: red;
    }
    .tombol a:hover {
        color: white;
    }
    .search{
        float: right;
        margin-bottom: 10px;
    }
    .search input[type=search]{
        width: 250px;
        height: 30px;
        border-radius: 4px;
        padding: 10px;
    }
    .menu-barang{
        width: 100px;
        height: 30px;
        background: #41c9d2;
        text-align: center;
        line-height: 30px;
        border-radius: 4px;
        float: left;
        margin-left: 5px;
        display: inline-block;
        margin-bottom: 10px;
    }
    .menu-barang a{
        color: white;
        display: block;
        text-decoration: none;
    }
    .dash-1{
        width: 90%;
        margin: 20px auto;
    }
    td a{
        text-decoration: none;
        color: white;
    }
    td a{
        text-decoration: none;
        color: white;
    }
    #produk a{
        text-decoration: none;
        color: white;
        display: block;
    }
    .aksi-2{
        width: 100px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        background: #41c9d2;
        border-radius: 4px;
    }
    .aksi{
        width: 60px;
        height: 20px;
        line-height: 20px;
        text-align: center;
    }
    th{
        background: #2c9ddd;
        color: white;
    }
    #profil{
        width: 200px;
        margin: 0 auto;
        margin-top: 30px;
    }
    #profil img{
        border-radius: 50%;
    }
    table{
        width: 100%;
        border-collapse: collapse;
        
    }
    th, td{
        height: 30px;
        padding-left:20px;
        
        border: 1px solid #ddd;
    }
</style>