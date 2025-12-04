<?php 
$conn = mysqli_connect("localhost", "root", "", "kampus"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white p-4">
    <div class="container">
        <h3 class="mb-4">Data Nilai</h3>

        <table class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nilai Angka</th>
                    <th>Huruf</th>
                    <th>Kode Matkul</th>
                    <th>NIM</th>
                    <th>NIDN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM tbl_nilai");
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "
                    <tr>
                        <td>{$row['id_nilai']}</td>
                        <td>{$row['nilai']}</td>
                        <td>{$row['nilaiHuruf']}</td>
                        <td>{$row['kodeMatkul']}</td>
                        <td>{$row['nim']}</td>
                        <td>{$row['nidn']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="index.php" class="btn btn-light mt-3">Kembali</a>
    </div>
</body>
</html>
