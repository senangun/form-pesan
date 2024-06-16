<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['number'];
    $selected_option = $_POST['pilihan_berat'];
    $selected_book = $_POST['book'];
    $jumlah = $_POST['Jumlah'];
    $catatan = $_POST['Catatan'];
    $tanggal = $_POST['Tanggal'];
    $bukti = $_POST['bukti'];

    echo "<h1>Form Pemesanan Buku Online</h1>";
    echo "Nama: " .$nama."<br>";
    echo "Alamat: " .$alamat."<br>";
    echo "Nomor Telepon: " .$nomor."<br>";
    echo "Metode Pembayaran: " .$selected_option."<br>";
    echo "Pilihan Buku: ".$selected_book."<br>";
    echo "Jumlah Buku: ".$jumlah."<br>";
    echo "Catatan Khusus: ".$catatan."<br>";
    echo "Tanggal Pengiriman: ".$tanggal."<br>";
    echo "Bukti Pembayaran: ".$bukti."<br>";
    ?>
</body>
</html>