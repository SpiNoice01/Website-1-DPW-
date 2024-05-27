<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include "koneksi.php";
    ?>
    <!-- ==================================================================================================================== -->
    <section id="Navbar">
        <nav class="navbar" style="background-color: #e3f2fd">
            <div class=" container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- ==================================================================================================================== -->

    <section id="Carousel">
        <div id="carouselExample" class="carousel slide ">
            <div class=" carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1920/700" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1920/700" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1920/700" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- ==================================================================================================================== -->
    <section id="BeritaCard" class="d-flex justify-content-evenly ">
        <div class="container-fluid text-center mt-4">

            <?php
            $query = ' SELECT * FROM berita where id_berita = "' . $_GET["id"] . '"';
            $queryexec = mysqli_query($donut, $query);
            // ================================= //
            if (mysqli_num_rows($queryexec)) {
                while ($row = mysqli_fetch_assoc($queryexec)) {
                    // $wordLimit = 50;
                    // $words = explode(" ", $row["konten"]);
                    // $artikel = implode(" ", array_slice($words, 0, $wordLimit));
                    $id = $row["id_berita"];
                    ?>
                    <!-- ================================= -->

                    <div class="card ">
                        <img src="<?php echo $row['gambar'] ?>" class="card-img-top" alt="Kuching"> <!-- Gambar -->
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $row['judul'] ?> </h5> <!-- Judul -->
                            <p class="card-text">
                                <?php
                                echo $row["konten"];

                                ?>
                            </p> <!-- DESC -->

                        </div>
                    </div>

                    <!-- ================================= -->
                    <?php
                }
            } else {
                echo "0 data";
            }
            ?>
        </div>

    </section>
    <!-- ==================================================================================================================== -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>



<!-- NANTI DIPELAJARI LAGI -->
<?php
// $MeongBerita = "SELECT * FROM berita";
// $hasilQuery = mysqli_query($donut, $MeongBerita);

// if (mysqli_num_rows($haQuesilry)) {
//     while ($row = mysqli_fetch_assoc($hasilQuery)) {
//         echo $row['gambar']; ?>

<!--  -->
<!-- <img src="<?php //echo $row['gambar'] ?>" /> -->
<!--  -->

<?php
//     }

// } else {
//     echo "No data";
// }
?>
<!--  NANTI DIPELAJARI LAGI -->