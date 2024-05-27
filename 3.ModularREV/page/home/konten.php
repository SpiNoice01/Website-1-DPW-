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