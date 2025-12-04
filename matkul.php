<?php 
$conn = mysqli_connect("localhost", "root", "", "kampus"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white p-4">
    <div class="container">
        <h3 class="mb-4">Data Mata Kuliah</h3>

        <table class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>NIDN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM tbl_matkul");
                while($row = mysqli_fetch_assoc($query)) {
                    echo "
                    <tr>
                        <td>{$row['kodeMatkul']}</td>
                        <td>{$row['namaMatkul']}</td>
                        <td>{$row['sks']}</td>
                        <td>{$row['nidn']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <a href='index.php' class='btn btn-light mt-3'>Kembali</a>
    </div>
</body>
</html>
