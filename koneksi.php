<?php
$conn_str = "host=balarama.db.elephantsql.com " .
    "port=5432 " .
    "user=vaxxxonn " .
    "dbname=vaxxxonn " .
    "password=FIS22sGeO8YMeuqnW77SrXXZpbg5e_S9";
$conn = pg_connect($conn_str);

// if($conn) {
//     echo "<h3>Koneksi Berhasil</h3>";
// } else {
//     echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
// }
?>