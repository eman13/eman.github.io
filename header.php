<?php 
    require_once "koneksi.php";
    
                    $login = false;
                    if(isset($_SESSION['nama'])){
                    $login = true;
    }
?>

<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
        <head>
            <link href="logotenda.png" rel="icon">
        </head>
<body>
        <header>
           
    <ul>
    <li><a href="index.php"><img src="logotenda.png" width="40" height="40" style="margin-top: 10px;"></a></li>    
    <li><a style="font-size:15px;"href="keranjang.php">Keranjang </a></li>    
    <li><a style="font-size:15px;"href="transaksi2.php">Transaksi</a></li>   
    <li><a style="font-size:15px;"href="login.php">Login</a></li>   
      
    </ul>
    </header>
        <div class="nav">
        </div>        
    </body>
    <style media="screen">
        *{
            margin: 0; padding: 0;
            font-family: verdana;
            font-size: 12px;
            max-width: 100% !important;
        }
        body{
            background: #fafafa;
        }
        header{
            width: 100%;
            height: 60px;
            background: #F44336;
        }
        ul{
            margin: 0 5%;
            
        }
        li:last-child{
            float: right;
        }        
        li{
            list-style: none;
            float: left;
            width: 12%;
            line-height: 60px;
            text-align:center;
            font-size: 12px;
        }
        li:hover{
            background: white;
            transition: 0.6s ease;
        }
        li a:hover{
            color: black;
        }        
        li:first-child:hover{
            background: none;
            }
        
        li > a{
            text-decoration: none;
            color: white;
            display: block;
        }
        .nav{
            width: 100%;
            height: 40px;
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.1);
            background: white;
        }
    </style>
</html>