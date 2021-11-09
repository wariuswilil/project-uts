<?php

$host       = "localhost";
$username   = "root";
$password   = "welcome123";
$databasse  = "tugasuts";
$port       = 3306;

$conn = mysqli_connect($host, $username, $password, $databasse, $port);

// Query Books
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_object($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function addBook($data)
{
    global $conn;
    $judul      = $data['judul'];
    $penerbit   = $data['penerbit'];
    $tahun      = $data['tahun'];

    $query = "INSERT INTO buku VALUES (null, '$judul', '$penerbit', '$tahun')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function editBook($data)
{
    global $conn;
    $id        = $data['idbook'];
    $judul      = $data['judul'];
    $penerbit   = $data['penerbit'];
    $tahun      = $data['tahun'];
    // var_dump($id);
    $query = "UPDATE buku SET
				judul = '$judul',
				penerbit = '$penerbit',
				tahun_terbit = '$tahun'
			  WHERE id = $id
			";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deleteBook($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// Peminjaman
function addPinjam($data)
{
    global $conn;
    $buku               = $data['buku'];
    $nama               = $data['nama'];
    $tanggal_pinjam     = $data['tanggal_pinjam'];
    $tanggal_kembali    = $data['tanggal_kembali'];

    // var_dump($data);
    $query = "INSERT INTO peminjaman VALUES (null, '$buku', '$nama', '$tanggal_pinjam', '$tanggal_kembali')";

    // var_dump($query);
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function editPinjam($data)
{
    global $conn;
    $id                 = $data['id'];
    $tanggal_kembali    = $data['tanggal_kembali'];

    // var_dump($data);
    $query = "UPDATE peminjaman SET
				tanggal_kembali = '$tanggal_kembali'
			  WHERE id = $id
			";

    // var_dump($query);
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deletePinjam($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM peminjaman WHERE id = $id");
    return mysqli_affected_rows($conn);
}
//TODO Format Tanggal dan Mata Uang
function tanggal($value)
{
    return date('l, d-m-Y', strtotime($value));
}
