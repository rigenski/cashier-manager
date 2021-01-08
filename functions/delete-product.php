<?php
include 'functions.php';

// ambil nilai di url
$id = $_GET['id'];

// memanggil fungsi dari functions.php
if (deleteProduct($id)) {
    echo "<script>alert('data berhasil dihapus');
        document.location.href = '../product.php'</script>";
} else {
    echo "<script>alert('data gagal dihapus');
        document.location.href = '../product.php'</script>";
}
