<?php
require_once "./fungsi.php";
$pinjams = query("SELECT buku.judul, buku.penerbit, peminjaman.id, peminjaman.nama, peminjaman.tanggal_pinjam, peminjaman.tanggal_kembali FROM peminjaman LEFT JOIN buku ON peminjaman.buku_id = buku.id");

?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header">
                    <a href="?page=tambah-pinjam" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Peminjam</th>
                                <th>Judul</th>
                                <th>Penerbit</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pinjams as $pinjam) : ?>
                                <tr>
                                    <th><?= $no++; ?></th>
                                    <td><?= $pinjam->nama; ?></td>
                                    <td><?= $pinjam->judul; ?></td>
                                    <td><?= $pinjam->penerbit; ?></td>
                                    <td><?= tanggal($pinjam->tanggal_pinjam); ?></td>
                                    <td><?= tanggal($pinjam->tanggal_kembali); ?></td>
                                    <td>
                                        <a href="?page=edit-pinjam&id=<?= $pinjam->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="hapus_pinjam.php?id=<?= $pinjam->id; ?>" class="btn btn-danger btn-sm">Hapus</a>
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