<?php
require_once "./fungsi.php";
$books = query("SELECT * FROM buku");
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (addPinjam($_POST) > 0) {
        echo "
            		<script>
            			alert('data berhasil ditambahkan!');
            			document.location.href = 'index.php?page=peminjaman';
            		</script>
            	";
    } else {
        echo "
            		<script>
            			alert('data gagal ditambahkan!');
            			document.location.href = 'index.php?page=tambah-pinjam';
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
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select" name="buku">
                            <option selected>Pilih Buku</option>
                            <?php foreach ($books as $book) : ?>
                                <option value="<?= $book->id; ?>"><?= $book->judul; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="floatingSelect">Pilih Buku</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" placeholder="Nama Peminjam" name="nama">
                        <label for="nama">Nama Peminjam</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="tanggal_pinjam" placeholder="Tanggal Pinjam" name="tanggal_pinjam">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                    </div>
                    <div class="form-floating">
                        <input type="date" class="form-control" id="tanggal_kembali" placeholder="Tanggal Kembali" name="tanggal_kembali">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>