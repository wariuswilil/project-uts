<?php
require_once "./fungsi.php";
$id = $_GET["id"];

if (deletePinjam($id) > 0) {
    echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'index.php?page=peminjaman';
		</script>
	";
} else {
    echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index.php?page=peminjaman';
		</script>
	";
}
