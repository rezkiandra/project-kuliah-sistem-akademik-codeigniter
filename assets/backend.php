<?php
// Hubungkan dengan database
$conn = mysqli_connect("localhost", "root", "", "crud_ci");

// Cek koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil data dari database
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

// Buat array untuk menyimpan data
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Proses aksi hapus
if (isset($_POST['action']) && $_POST['action'] == 'hapus') {
    $id = $_POST['id'];

    // Query untuk menghapus data
    $deleteQuery = "DELETE FROM user WHERE id = $id";

    // Eksekusi query hapus
    if (mysqli_query($conn, $deleteQuery)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $deleteQuery . "<br>" . mysqli_error($conn);
    }
}

// Kembalikan data dalam format JSON
echo json_encode(array('data' => $data));

// Tutup koneksi database
mysqli_close($conn);
