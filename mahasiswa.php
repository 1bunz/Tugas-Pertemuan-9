<?php 
$conn = mysqli_connect("localhost", "root", "", "kampus"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white p-4">
    <div class="container">
        <h3 class="mb-4">Data Mahasiswa</h3>

        <table class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
                while($row = mysqli_fetch_assoc($query)) {
                    echo "
                    <tr>
                        <td>{$row['nim']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['prodi']}</td>
                        <td>{$row['angkatan']}</td>
                        <td>{$row['email']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <a href='index.php' class='btn btn-light mt-3'>Kembali</a>
    </div>
</body>
</html>
