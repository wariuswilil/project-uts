<?php
require_once "./fungsi.php";
$books = query("SELECT * FROM buku");
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header">
                    <a href="?page=tambah-buku" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Penerbit</th>
                                <th>Tahun Penerbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($books as $book) : ?>
                                <tr>
                                    <th><?= $no++; ?></th>
                                    <td><?= $book->judul; ?></td>
                                    <td><?= $book->penerbit; ?></td>
                                    <td><?= tanggal($book->tahun_terbit); ?></td>
                                    <td>
                                        <a href="?page=edit-buku&id=<?= $book->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="hapus_buku.php?id=<?= $book->id; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>