<title>TUBI ART TENDA</title>
<?php 
    require_once "koneksi.php";
    require_once "header.php";

$login = false;
    if(isset($_SESSION['nama'])){
        $login = true;
    }
    
        $query = "SELECT * FROM barang order by id desc limit 4";
        $sql = mysqli_query($koneksi, $query);
   
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                    $query = "SELECT * FROM barang WHERE nama_barang LIKE '%$cari%'";
                $sql = mysqli_query($koneksi, $query);
            }
?>
<style media="screen">
    *{
        font-size: 12px;
        max-width: 100% !important;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        
    }
    .container div{
        display: none;
    }
    .container img{
        width: 70%; 
        height: 500px;
        margin-top: 20px;
        margin-left: 200px;
    }
    .muat{
        width: 150px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border-radius: 5px;
        margin: 20px 40%;
        float: left;
        clear: both;
        background: #4caf50;
        border:1px solid #4caf50;
    }   
    .muat2{
        width: 50px;
        height: 20px;
        line-height: 20px;
        text-align: center;
        margin-right: 20px;
        border-radius: 5px;
        float: right;
        clear: both;
        background: #4caf50;
        border:1px solid #4caf50;
    }
    .muat:hover {
        background: white;
        border: 2px solid #4caf50;
        
    }
    .muat:hover a{
        color: black;
    }
    .muat a, .muat2 a{
        display: block;
        text-decoration: none;
        color: white;
    }
    .total{
        margin-top: 12px;
        font-size: 14px;
    }
    #cart p{
        margin: 0 auto;
        text-align: center;
        font-size: 18px;
        color: #ca4f6c;
        
    }
    .cart{
        border-radius: 2px;
    }
    .cart{
        width: 20%;
        float: right;
        margin-right: 5%;
        border: 1px solid #ddd;
        padding: 20px;
        background: white;
        margin-top: 27%;
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
    }
    h1{
        font-size: 18px;
    }
    
    
    div.box img{
        width:100%;    
    }
   
    
    .box:last-child{
        margin-bottom: 10%;
    }
    .box{
        margin:30px 25px 0 0;
        width: 180px;
        border: 1px solid rgb(226, 226, 226);
        float: left;
        display: inline-block;
        text-transform: capitalize;
        background: white;
        border-radius: 4px;
        animation: flip 2s;
    }
    @keyframes flip{
        from {transform: rotatey(0deg); opacity: 0}
        to {transform: rotatey(360deg);}
    }
    .beli{
        width: 100px;
        height: 30px;
        background: #F44336;
        color: white;
        line-height: 30px;
        text-align: center;
        border-radius: 4px;
        margin: 10px auto;
    }
    .beli:hover{
        background: white;
    }
    .beli a{
        display: block;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }
    .beli a:hover{
        color: black;
        border:1px solid #F44336;
    }    
    h2{
        text-align: center;
    }
    .box:hover{
        border:1px solid #F44336;
        /* box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.12); */
    }
    .deskripsi{
       font-size: 28px;
    }
    .main{
        width: 65%;
        height: auto;
        margin-left: 5%;
        margin-top: 25%;
        float: left;
    }
    nav{
        margin-top: 0.5%;
        width: 100%;
        height: 200px;
    }
    nav img{
        position: absolute;
        max-height: 450px;
        width: 100%;
        overflow: hidden;
        background-color: rgba(9, 52, 84, 0.8);
    }
    .deskripsi2{
        position: relative;
        color: yellow;
        margin-left: 480px;
        top: 80%;
        font-weight: bold;
        font-size: 44px;
        font-family: sans-serif;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }
    .span{
        font-size: 23px; margin-left: -150px; position: relative;
        margin-left: 380px;
        top: 100%;
        color: #F44336;
        margin-top: 160px;
    }
    #bg{
        position: absolute;
        background-color: #1E3C51;
        width: 100%;
        height: 450px;
        opacity: 0.5;
    }
</style>
<head>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="bxslider/jquery.bxslider.min.css">
    <script type="text/javascript" src="bxslider/jquery.bxslider.min.js"></script>
</head>
<nav>
   <img src="bg.jpg" alt="">
   <div id="bg"></div>
   <div class="deskripsi2">Tubi Art Tenda<br> </div>
   <i><p class="span">Menyediakan Undangan dan Dekorasi Tenda</p></i>
</nav> 
    <div class="main">
        <?php 
        while($row = mysqli_fetch_assoc($sql)):?>
            <div class="box">
                <a href="single.php?id=<?= $row['id'];?>" alt="Ini Foto">
                    <img src="<?= "images2/". $row['foto'];?>" width="130" height="170">
                </a>
                <div class="deskripsi" style="margin-top: 12px;"><center><?= $row['nama_barang'];?> </center></div><br>
                    <h2>Rp.<?= number_format($row['harga'],0,',','.');?></h2>
                    <div class="beli"><a href="aksi_cart.php?id=<?= $row['id'];?>">Add To cart</a></div>

                </div>
<!--                </div>-->
                <?php endwhile;?>
                    <br>
                    <div class="muat"><a href="banyak.php">Lihat Semua Produk</a></div>
                </div>


<div class="cart">
    <div id="cart">
        <p>Keranjang Belanja Anda</p>
    </div>
        <table border="1">
            <tr>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
                
                
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
<!--
                <td><a href="min.php?id= <?= $t['id'];?>">[-]</a></td>
                <td><a href="del.php?id= <?= $t['id'];?>">[x]</a></td>
-->
            </tr>
            <?php endwhile;?>
        </table> 
        <p style="float:right; margin-right: 10%; margin-top: 5px;"><div class="muat2"><a href="keranjang.php">Detail</a></div></p><br>
        <p class="total"><b>Total Belanja Anda : Rp.<?= number_format($total,0, ',', '.');?></b></p>
    </div>

   <!-- <?php require_once "kategori.php";?> -->
<?php require_once "footer.php";?>


           