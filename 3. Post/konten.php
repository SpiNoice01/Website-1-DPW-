<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<section class="container">

    <body>
        <?php
        include "config/koneksi.php";
        ?>

        <?php
        // var_dump($conn);
        ?>

        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
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

<!-- ========================================================================================================================================================================== -->
<div id="carouselExample" class="carousel slide container-fluid">
    <div class="carousel-inner w-100 h">
        <?php
        $sql = "SELECT * FROM slider";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="carousel-item active ">
                    <img src="<?php echo $row["gambar"]; ?>" class="d-block w-100 h-50" style="" alt="...">
                </div>
                <?php
            }
        } else {
            echo "No data";
        }
        ?>
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
<!--  -->

<!-- ===================================================================================================================================================================================== -->
<section class="container text-center img-fluid">
    <div class="row">
        <h2 class="text-center">prestasi Mahasiswa</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <!--  -->
            <?php
            $sql = ' SELECT * FROM berita where id_berita = "' . $_GET["id"] . '"';
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // 
                    // $wordLimit = 50;
                    // $words = explode(" ", $row["konten"]);
                    // $artikel = implode(" ", array_slice($words, 0, $wordLimit));
                    // 
                    ?>
                    <!--  -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo $row["gambar"]; ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["judul"]; ?></h5>
                                <p class="card-text">
                                    <?php
                                    echo $row["konten"]; //aaaaaaa
                                    ?>
                                </p>



                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>

                    <?php
                    // data
            
                }
            } else {
                echo "0 data";
            }
            mysqli_close($conn);
            ?>
            <!--  -->


        </div>
    </div>
</section>



<footer>
    <p class="text-center mt-10"> Coyright 2024 ITTP</p>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>