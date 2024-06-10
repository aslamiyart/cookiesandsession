<?php
require 'functions.php';

$id = $_GET["id"];
if ($uu = delete($id) > 0) {
    echo "<script>
        alert('Data berhasil dihapus! ☺');
        document.location.href= 'dataMhs.php';
        </script>";
}else {
    echo "<script>
        alert('Data gagal dihapus!');
        document.location.href= 'dataMhs.php';
        </script>";
}
        //document.location.href= 'dataMhs.php';
?>
