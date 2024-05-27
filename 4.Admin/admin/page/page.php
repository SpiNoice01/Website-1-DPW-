<?php
include "_component/header.php";
if ($_GET['mod'] == 'dashboard') {
    include 'dashboard/dashboard.php';
} else if ($_GET['mod'] == 'konten') {
    include 'dashboard/konten.php';
}
include "_component/footer.php";
?>