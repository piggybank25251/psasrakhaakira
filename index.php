<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Aplikasi Mapel by Rakha Akira</title>
    <link rel="shortcut icon" href="gambar\gambar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
    <a class="navbar-brand" href=".">Webpro
        <img src="gambar\gambar.png" alt="" height="74px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href=".">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="?m=guru">guru</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="?m=mapel">mapel</a>
        </li>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
</div>
</nav>
    
<div class="container mt-2">
    <?php include_once('webpro.php'); ?>
</div>

    <div class="fixed-bottom">
    <div class="card">
        <div class="card-body">
            &copy; 2024-<?= date("Y")?> - Web programming by Rakha Akira
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>