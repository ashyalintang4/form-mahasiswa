<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "mahasiswa1");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Hapus data mahasiswa
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']); // Validasi ID
    $stmt = $conn->prepare("DELETE FROM mahasiswa1 WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: tabel_mahasiswa.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Ambil data mahasiswa
$result = $conn->query("SELECT * FROM mahasiswa1");
if (!$result) {
    die("Query Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>

        <!-- Tabel Data Mahasiswa -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Asal Sekolah</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Penghasilan Orang Tua</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = $result->fetch_assoc()) {
                    // Kode yang akan diulang
                    echo "<tr>";
                            "<td>{$no}</td>";
                            "<td>{$data['nama']}</td>";
                            "<td>{$data['asal_sekolah']}</td>";
                            "<td>{$data['email']}</td>";
                            "<td>{$data['jenis_kelamin']}</td>";
                    echo "</tr>";
                                           

 }

