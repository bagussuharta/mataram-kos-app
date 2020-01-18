<?php 
session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
require 'function/all_functions.php';

$idKos = $_GET["id"];

if(hapus_kos($idKos) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'kelola_data_kos.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'kelola_data_kos.php';
        </script>
    ";
}

?>