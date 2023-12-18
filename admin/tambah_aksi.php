<?php
include '../koneksi.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_wisata = $_POST["nama_wisata"];
    $alamat = $_POST["alamat"];
    $deskripsi = $_POST["deskripsi"];
    $harga_tiket = $_POST["harga_tiket"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    // Perform SQL query to insert data into the database
    $query = "INSERT INTO wisata (nama_wisata, alamat, deskripsi, harga_tiket, latitude, longitude) 
              VALUES ('$nama_wisata', '$alamat', '$deskripsi', '$harga_tiket', '$latitude', '$longitude')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data Berhasil Disimpan!'); window.location = 'tampil_data.php'</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>