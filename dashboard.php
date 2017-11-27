
<?php 
    require_once "koneksi.php";
    require_once "header.php";
    if(!$_SESSION['nama']){
        header('Location: login.php');
    }
    
    $perPage = 10;
    $page = isset($_GET["hal"]) ? (int)$_GET["hal"] : 1;
    $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

    $articles = "SELECT * FROM user LIMIT $start, $perPage";
    $result2 = mysqli_query($koneksi, $articles);

    
    $a = "SELECT * FROM user";
    $b = mysqli_query($koneksi, $a);
    $q = mysqli_num_rows($b);

    $pages = ceil($q/$perPage);

    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $search = "SELECT * FROM user WHERE firstname or lastname LIKE '%$cari%' ";
    $result2 = mysqli_query($koneksi, $search);
    }
    

    
    
?>
<head>
<title>Dashboard Admin</title>
</head>
    <h1 style="color: #ca4f6c; font-size: 23px; margin-left: 35%; margin-top: 60px;">Dashboard Admin</h1><br><br>
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
        <br><br>
    <div class="search">
        <form action="" method="get">
        <input type="search" name="cari" placeholder="Cari nama pemesan disini ...">
        
        </form>    
    </div>
    <h1 style="font-size: 22px; color:#ca4f6c;">Data Pemesanan Terverifikasi</h1><br>
    <table border="1">
        <?php 
            
            
        ?>
        <tr>
            <th>id Pemesanan</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php while($c =mysqli_fetch_assoc($result2)):?>
        <tr>
            <td><?= $c['id_pesan'];?></td>
            <td><?= $c['firstname']." ".$c['lastname'];?></td>
            <td><?= $c['email'];?></td>
        </tr>
        <?php endwhile;?>
    </table><br><br>
    <center><div class="tombol">
        <?php for($i=1; $i<=$pages; $i++){ ?>
        <a href="?hal= <?= $i; ?>"><?= $i;?></a>
        <?php } ?>
    </div></center>
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