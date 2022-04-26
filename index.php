<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.2/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Server Side-Dinamis 1</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="text-center text-white">
                <h1 class="fw-bolder fs-5">Cari Film Favorit Anda Disini !</h1>
                <h6 style="font-style: italic;">Kumpulan Film Indonesia</h6>
            </div>                      
        </div>
    </header>

    <div class="container search">
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <i class="bi bi-sort-alpha-down">Sorting</i>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xxl-3">
                <label for="inputState" class="visually-hidden">Urutkan Berdasarkan</label>
                <select id="inputState" class="form-select">
                <option value="0">Urutkan Berdasarkan</option>
                <option value="1">Title Ascending</option>
                <option value="2">Title Descending</option>
                </select>
            </div>
            <div class="col-sm-6 col-md-7 col-lg-7 col-xxl-7">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan judul" id="ngetik">
                    <button class="btn btn-dark" type="button" id="submit"> Search</button>
                </div>
            </div>
            <div class="col-auto px-1">
                <button type="button" class="btn btn-primary bi bi-plus-circle-fill" id="create"> Create</button>
            </div>
        </div>
    </div>

    <section class="container mt-2 mb-5">
        <div class="row gx-3" id="data">
            <?php
            include "db.php";
            $sql = "SELECT * FROM film";
            $hasil = $db ->query($sql);

            while ($data = $hasil->fetch_assoc()) :
            ?>
            <div class="column col col-sm-2 col-md-3 col-lg-3 col-xxl-3">
                <div class="card">
                    <!-- Rating -->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= $data['rating']?></div>
                    <!-- Poster Film -->
                    <img class="card-img-top" src="<?= $data['gambar']?>" alt="Poster Film" height="400"/>
                    <!-- Keterangan Film -->
                    <div class="card-body p-2">
                        <div class="text">
                            <h5><?= $data['judul_film']?></h5>
                            <h7><?= $data['tahun_rilis']?></h7>
                            <!-- Tombol -->
                                <button class="btn" style="float:right;">
                                    <i class="fa fa-trash" style="color: red;"></i>
                                </button>
                                <button class="btn" style="float:right;">
                                    <i class="fa fa-edit" style="color: blue;"></i>
                                </button>
                        </div>
                    </div>
                    <!-- Footer card -->
                    <div class="card-footer p-3 bg-transparent">
                        <div class="text-center"><a class="button btn btn-outline-dark mt-auto" href="#">Lihat Sekarang</a></div>
                    </div>
                </div>
            </div>
            <?php endwhile ; ?>
        </div>
    </section>

    <footer class="py-1">
        <div class="container"><p class="text-center text-white">By : Rina Agustin (202410101015)</p></div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="script2.js"></script>
</body>
</html>