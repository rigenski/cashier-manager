<?php
include 'functions.php';

// ambil nilai di url
$id = $_GET['uid'];

// memanggil fungsi dari functions.php
if (deleteMember($id)) {
    echo "<script>
    alert('data berhasil dihapus');
        document.location.href = '../member.php'</script>";
} else {
    echo "<script>alert('data gagal dihapus');
        document.location.href = '../member.php'</script>";
}
