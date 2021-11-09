<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tugas UTS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="./index.php">Tugas UTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=buku">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=peminjaman">Data Peminjaman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <?php
                $page = $_GET['page'];
                // echo $page;
                if ($page == 'buku') {
                    require_once "./buku.php";
                } elseif ($page == 'peminjaman') {
                    require_once './peminjaman.php';
                } elseif ($page == 'tambah-buku') {
                    require_once "./tambah_buku.php";
                } elseif ($page == 'edit-buku') {
                    require_once "./edit_buku.php";
                } elseif ($page == 'tambah-pinjam') {
                    require_once "./tambah_pinjam.php";
                } elseif ($page == 'edit-pinjam') {
                    require_once "./edit_pinjam.php";
                } else {
                    require_once './index.php';
                }

                // var_dump();
                ?>

                <div class="alert alert-success mt-5" role="alert">
                    Tugas UTS Matakuliah Pemograman Internet
                </div>

                <ul class="list-group">
                    <li class="list-group-item">Warius Wilil</li>
                    <li class="list-group-item">16510026</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>