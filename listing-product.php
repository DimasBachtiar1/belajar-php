<?php 
    $product = array(
        array(
            "nama_product" => "Kemeja Putih",
            "jumlah" => 50,
            "harga" => 150000,
            "deskripsi" => "Kemeja casual dengan warna putih yang elegan"
        ),
        array(
            "nama_product" => "Celana Jeans",
            "jumlah" => 30,
            "harga" => 250000,
            "deskripsi" => "Celana jeans dengan potongan slim fit dan desain modern"
        ),
        array(
            "nama_product" => "Sepatu Sneakers",
            "jumlah" => 30,
            "harga" => 300000,
            "deskripsi" => "Sepatu sneakers dengan desain sporty yang nyaman digunakan sehari-hari"
        ),
        array(
            "nama_product" => "Tas Ransel",
            "jumlah" => 40,
            "harga" => 350000,
            "deskripsi" => "Tas ransel multifungsi dengan banyak kantong dan tahan air"
        ),
        
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Product</title>
    <link rel="stylesheet" href="assets/css/listing-product.css">
</head>
<body>
    <main>
        <div class="container">
            <h1>Data Product</h1>
            
            <div class="btn">
                <button onclick="show_card()"> Show Card</button>
                <button onclick="show_tabel()"> Show Table</button>
            </div>

            <div id="data-tabel">
                <table>
                    <thead>
                        <tr>
                            <td>Product</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td>Deskripsi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $item) {?>
                        <tr>
                            <td><?php echo $item["nama_product"]?></td>
                            <td><?php echo $item["jumlah"]?></td>
                            <td>Rp<?php echo number_format($item["harga"], 0, ',', '.')?></td>
                            <td><?php echo $item["deskripsi"]?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div id="data-card">
                <div class="row">
                <?php foreach ($product as $item) {?>
                    <div class="card">
                        <h2><?php echo $item["nama_product"]?></h2>
                        <p><?php echo $item["deskripsi"]?></p>
                        <div class="harga">
                            <h3>Rp<?php echo number_format($item["harga"], 0, ',', '.')?></h3>
                            <p>Stok : <?php echo $item["jumlah"]?></p>
                        </div>
                    </div>
                <?php }?> 
                </div>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>