<?php
require("config.php");

$result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");

?>

<html>
<head>    
    <title>Halaman Utama</title>
</head>

<body>
<a href="add.php">Tambah Produk Baru</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama Produk</th> <th>Keterangan</th> <th>Harga</th> <th>Jumlah</th> <th>Update</th>
    </tr>
    <?php  
    while($data_produk = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_produk['nama_produk']."</td>";
        echo "<td>".$data_produk['keterangan']."</td>";
        echo "<td>".$data_produk['harga']."</td>";    
        echo "<td>".$data_produk['jumlah']."</td>";    
        echo "<td><a href='edit.php?id=$data_produk[id]'>Edit</a> | <a href='delete.php?id=$data_produk[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>