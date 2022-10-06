<?php 
$ID     = $_GET["ID"];   
$NAMA   = $_GET["NAMA"];
$HARGA  = $_GET["HARGA"]; ?> 

<!DOCTYPE HTML>
<html>
    <head>
        <title>Ahmad Fadillah</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Produk</h1>
            <form>
                <img src="Buku.jpeg" alt="Buku Python" width="500" height="500"><br>
                <br>
                <p> ID-Produk    : <?php echo $ID;?>     </p> <br>
                <p> Nama Produk  : <?php echo $NAMA;?>   </p> <br>
                <p> Harga Produk : <?php echo $HARGA;?>  </p> <br>
            </form>
        </div>     
    </body>
</html>