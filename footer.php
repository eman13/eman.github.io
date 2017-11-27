
<div class="under">
    <div class="kolom-3">
        <h2 class="judul-2">Kategori</h2><br><br>
        <p><a href="undangan.php">&#9679; Undangan</a></p>
        <p><a href="tenda.php">&#9679; Tenda</a></p>
    </div>
    <div class="kolom-3 kolom-3-tengah">
        <h2 class="judul-2">Sosial Media</h2><br><br>
        <p><a href="index.php">&#9679; Facebook</a></p>
        <p><a href="index.php">&#9679; Instagram</a></p>
        <p><a href="index.php">&#9679; Twitter</a></p>
    </div>
    <div class="kolom-3">
        <h2 class="judul-2">Metode Pembayaran</h2><br><br>
        <p><img src="images2/mandiri.jpg" width="310" height="80"></p>
        <p><img src="images2/bri.jpg" width="150" height="70" style="margin-top: 5px;float:left; display: inline-block;"></p>
        <p><img src="images2/bni.jpg" width="145" height="70" style="margin-top: 5px;float:right; display: inline-block;"></p>
    </div>
</div>
    <footer>
        &copy;<?= date("Y");?> Eman Sulaeman
    </footer>

<style media="screen">
    .under{
        height: 250px;
        width: 90%;
        background: #f1f1f1;
        clear: both;
        padding: 0 5%;
        border-top: 2px solid #ddd;
    }
    .under a{
        color: black;
        text-decoration: none;
        display: block;
        font-size: 14px;
    }
    .judul-2{
        float: left;
        color: black;
        font-size: 18px;
        display: block;
        font-weight: normal;
        margin-left: 5px;
    }
    .kolom-3 p{
        color: black;
        font-size: 14px;
    }
    .kolom-3-tengah{
        margin:0 10%;
    }
    .kolom-3{
        float: left;
        width: 25%;
        height: auto;
        line-height: 23px;
/*        background: red;*/
        margin-top: 30px;
    }
    footer{
        width: 100%;
        height: 50px;
        background: #333333;
        color: white;
        float: left;
        text-align: center;
        line-height: 50px;
    }
    
        
</style>