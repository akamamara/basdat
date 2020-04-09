<?php
$db=pg_connect('host=localhost dbname=sekolah user=alavia password=ipbJaya!');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
