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
    <div class="row row-cols-1 row-cols-md-3 g-4 w-50 container-fluid text-center mt-10">

        <?php
        $query = "SELECT * FROM berita";
        $queryexec = mysqli_query($donut, $query);
        // ================================= //
        if (mysqli_num_rows($queryexec)) {
            while ($row = mysqli_fetch_assoc($queryexec)) {
                $wordLimit = 50;
                $words = explode(" ", $row["konten"]);
                $artikel = implode(" ", array_slice($words, 0, $wordLimit));
                $id = $row["id_berita"];
                ?>
                <!-- ================================= -->
                <div class="col">
                    <div class="card ">
                        <img src="<?php echo $row['gambar'] ?>" class="card-img-top" alt="Kuching"> <!-- Gambar -->
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $row['judul'] ?> </h5> <!-- Judul -->
                            <p class="card-text">
                                <?php
                                echo $artikel;
                                if (count($words) > $wordLimit) {
                                    echo '...
                                        <br><a href="page.php?mod=konten&id=' . $id . '"> Read More </a>';
                                }
                                ?>
                            </p> <!-- DESC -->

                        </div>
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