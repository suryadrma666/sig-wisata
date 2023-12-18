<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_wisata'];

// menghapus data dari database
$queryDelete = mysqli_query($koneksi, "DELETE FROM wisata WHERE id_wisata='$id'");
if ($queryDelete) {
    // Reset auto-increment value
    $queryResetAutoIncrement = mysqli_query($koneksi, "ALTER TABLE wisata AUTO_INCREMENT = 1");

    if ($queryResetAutoIncrement) {
        echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'tampil_data.php'</script>";
    } else {
        echo "<script>alert('Data Berhasil Dihapus, tetapi gagal mereset ID!'); window.location = 'tampil_data.php'</script>";
    }
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'tampil_data.php'</script>";
}
?>

