<?php
if ($_GET['mod'] == 'home') {
    include "home/home.php";
} else if ($_GET['mod'] == 'berita') {
    include "berita/berita.php";
} else if ($_GET['mod'] == "lifestyle") { // Corrected spelling
    include "lifestyle/lifestyle.php"; // Assuming the directory is named "lifestyle"
} else if ($_GET['mod'] == "technology") {
    include "technology/technology.php"; // Assuming the directory is named "technology"
} else if ($_GET['mod'] == "education") {
    include "education/education.php"; // Assuming the directory is named "education"
} else if ($_GET['mod'] == "sport") {
    include "sport/sport.php"; // Assuming the directory is named "sport"
} else {
    // Handle cases where $_GET['mod'] is not set or has an invalid value
    echo "Invalid module requested.";
}
?>