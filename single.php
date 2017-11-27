<?php 
    require_once "koneksi.php";
    require_once "header.php";
?>
<title>Detail Produk</title>
<?php 
        $id = $_GET['id'];
        if(isset($id));
            
            $query = "SELECT * FROM barang WHERE id='$id'";
            $result = mysqli_query($koneksi, $query);
            $row= mysqli_fetch_assoc($result);

?>
<style media="screen">
    *{
        font-family: verdana;
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
    .img-produk{
        width: 250px;
        float: left;
        display: inline-block;
        height: 320px;
        border: 1px solid #ddd;
        box-shadow: 0px 2px 3px rgba(0,0,0,0.1);
        background: white;
        margin-top: 5%;
        border-radius: 4px;
    }
    .produk{
        width: 80%;
        background: white;
        margin-top: 2%;
        line-height: 40px;
        text-align: center;
        color: white;
        border-radius: 4px;
        box-shadow: 0px 2px 3px rgba(0,0,0,0.1);
    }
    .detail{
        margin: 9% 0;
    }
    .desc{
        float:right;
        width: 60%;
        height: auto;
    }
    .desc p{
        font-size: 18px;
    }
    .desc h1{
        font-size: 21px;
    }
    .single{
        width: 100%;
        height: auto;
        float: left;
        margin-bottom: 10%;
    }
    
    .center{
        width: 80%;
        margin: 0 auto;
        height :auto;
    }
    #button{
        width: 100px;
        height: 30px;
        background: #F44336;
        color: white;
        line-height: 30px;
        text-align: center;
        border-radius: 4px;
        margin: 15px auto;
    }
    #button:hover{
        background: white;
    }
    #button a{
        display: block;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }
    #button a:hover{
        color: black;
        border:1px solid #F44336;
    }    
</style>
        <center>
            <div class="produk">
                <h1 style="font-size: 14px; color: #F44336">Detail Produk</h1>
            </div>
        </center>
        
        <div class="center">
            <div class="single">
                <div class="img-produk">
                    <a href="<?= "images2/".$row['foto'];?>"><img src="<?= "images2/".$row['foto'];?>" width="250" height="220"></a>
                    <p style="color: #F44336; font-size: 22px;text-align: center; margin-top:20px;"; > Rp. <?= number_format($row['harga'], 0, ',', '.'); ?>,- </p>
                    <div id="button"><a href="aksi_cart.php?id=<?= $row['id'];?>">Add To cart</a></div>
                </div>
            
            <div style="width: 70%; float:right; " class="img-produk">
                                <h1 style="max-width: 100%; height:30px;line-height: 30px;background: #F44336;padding-left: 20px; color: white;"><?= $row['nama_barang'];?></h1><hr><br><br>
                                    <p style="padding-left: 20px">Harga : Rp. <?= $row['harga'];?></p><br>
                                        <p style="padding-left: 20px">Stock :<?= $row['jumlah_barang'];?></p><br>
                                            <p style="padding-left: 20px">Keterangan :<?= $row['deskripsi'];?></p><br>
                                        <!-- <div class="beli"><a href="aksi_cart.php?id=<?= $row['id'];?>">Add To cart</a></div> -->
                                    </div>
                                </div>
                             </div>
                        </div>
<?php require_once "footer.php";?>