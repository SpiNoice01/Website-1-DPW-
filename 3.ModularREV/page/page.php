<?php
include "_component/header.php";
if ($_GET['mod'] == 'home') {
    include 'home/home.php';
} else if ($_GET['mod'] == 'konten') {
    include 'home/konten.php';
}
include "_component/footer.php";
?>