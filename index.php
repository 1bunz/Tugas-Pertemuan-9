<?php 
$conn = mysqli_connect("localhost", "root", "", "kampus"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

<div class="d-flex">
    
    <div class="bg-secondary p-3" style="width:250px; height:100vh;">
        <h5 class="text-center mb-4">
            <i class="bi bi-person-circle"></i> Subani Maulana
        </h5>

        <a href="index.php" class="btn btn-dark w-100 mb-2 text-start">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
        <a href="mahasiswa.php" class="btn btn-dark w-100 mb-2 text-start">
            <i class="bi bi-mortarboard"></i> Mahasiswa
        </a>
        <a href="dosen.php" class="btn btn-dark w-100 mb-2 text-start">
            <i class="bi bi-person-badge"></i> Dosen
        </a>
        <a href="matkul.php" class="btn btn-dark w-100 mb-2 text-start">
            <i class="bi bi-journal-bookmark"></i> Mata Kuliah
        </a>
        <a href="nilai.php" class="btn btn-dark w-100 mb-2 text-start">
            <i class="bi bi-card-checklist"></i> Nilai
        </a>
    </div>

    <div class="p-4 w-100">
        <h2>Dashboard</h2>
        <p>Selamat datang di Sistem Akademik Kampus!</p>
        <div class="mt-3">
            <p><strong>Nama:</strong> Subani Maulana</p>
            <p><strong>NIM:</strong> 202404023</p>
        </div>
    </div>

</div>

</body>
</html>
