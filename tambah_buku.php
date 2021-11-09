<?php
require_once "./fungsi.php";
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (addBook($_POST) > 0) {
        echo "
        		<script>
        			alert('data berhasil ditambahkan!');
        			document.location.href = 'index.php?page=buku';
        		</script>
        	";
    } else {
        echo "
        		<script>
        			alert('data gagal ditambahkan!');
        			document.location.href = 'index.php?page=tambah-buku';
        		</script>
        	";
    }
}
?>
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judul" placeholder="Judul Buku" name="judul">
                        <label for="judul">Judul Buku</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="penerbit" placeholder="Penerbit" name="penerbit">
                        <label for="penerbit">Penerbit</label>
                    </div>
                    <div class="form-floating">
                        <input type="date" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit" name="tahun">
                        <label for="tahun_terbit">Tahun Terbit</label>
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>