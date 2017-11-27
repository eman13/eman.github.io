<?php 
    require_once "koneksi.php";
    require_once "header.php";
    
?>
<head>
<title>Dashboard Admin</title>
</head>
<div id="produk"><br><br>

<!--        <h1 style="color: #ca4f6c; font-size: 23px; margin-left: 38%;">Daftar Produk</h1><br>-->
    <?php
    $perPage = 10;
    $page = isset($_GET["hal"]) ? (int)$_GET["hal"] : 1;
    $start = ($page > 1 ) ? ($page * $perPage) - $perPage : 0;
    
    ?>
        <?php 
            $query = "SELECT * FROM barang LIMIT $start, $perPage";
              $sql = mysqli_query($koneksi, $query);
    
            $a = "SELECT * FROM barang";
            $b = mysqli_query($koneksi, $a);
            $total = mysqli_num_rows($b);
    
        $pages = ceil($total/$perPage);
    
?>  <center><h1 style="font-size: 22px; color:#ca4f6c;">Data Produk</h1></center><br>
    <div class="menu-barang">
    <a href="dashboard.php">Dashboard</a>
</div>
    <div class="menu-barang">
    <a href="barang.php">Data Produk</a>
</div>
        <div class="menu-barang">
    <a href="pemesan.php">Data Pemesan</a>
</div>
        <p class="menu-barang"><a href="tambah.php">Tambah Produk</a></p><br><br>
        
        <table border="1">
            <tr>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Deskripsi</th>
                <th></th>
                <th></th>
            </tr>
            <?php while($row= mysqli_fetch_assoc($sql)):?>
            <tr>
                <td><img src="<?= "images2/".$row['foto'];?> "width='100' height='70'></td>
                <td><?= $row['nama_barang'];?></td>
                <td><?= $row['harga'];?></td>
                <td><?= $row['jumlah_barang'];?></td>
                <td><?= $row['deskripsi'];?></td>
                <td><a href="edit.php?id= <?= $row['id'];?>"><p class="aksi" style="background: #41c9d2;">Edit</p></a></td>
<!--                <td><a href="min.php?id= <?= $t['id'];?>"><p class="aksi" style="background: #ecef09;">Kurang</p></a></td>-->
                <td><a href="hapus.php?id= <?= $row['id'];?>" onclick="return confirm('Anda Yakin Akan menghapus data ini?');"><p class="aksi" style="background: #e33f3f;">Hapus</p></a></td>
            </tr>
            <?php endwhile;?>
        </table>
    <div class="tombol">
        <?php for($i=1; $i<=$pages; $i++){?>
        <a style="color: black;" href="?hal= <?= $i; ?>"><?= $i;?></a>
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
    #produk{
        width: 90%;
        margin: 0 auto;
        padding-bottom: 20px;
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