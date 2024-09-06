<?php
session_start();

if (empty($_SESSION['fullname'])) {
    header("Location: Admin/index.html");
    exit();
}
?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Pesona Bandung">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Profil</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  


</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-ufWrwG7gtV" once="menu" id="menu1-t">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" >Pesona Bandung</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-7" href="index.html">Home</a></li><li class="nav-item"><a class="nav-link link text-black display-7" href="destinasi.html">Destinasi</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-7" href="fasilitas.html">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-7" href="Transportasi.html">Transportasi</a>
                    </li></ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="profil.php" target="_blank">
                        <span>
                            <img src="assets/images/akun-removebg-preview.png" class="profil active" alt="logoakun kecil" style="height: 40px; width: auto;">
                        </span>
                    </a>
                </div>
                
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="features16 cid-ufWrwH2Sln" id="features17-u">
    <div class="container">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/transportasi/hero-terminal.jpg" alt="Foto Profil">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong> <?php echo "<h1>Hallo, " . $_SESSION['fullname'] ."!". "</h1>"; ?></strong></h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            Terima Kasih Sudah Menggunakan Apliakasi Kami !!</p>
                        <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="Admin/logout.php">Logout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
        <div class="container">
            <div class="row">
                <?php
                require_once 'Admin/connect.php';

                // Nama lokasi dihardcode
                $locations = [
                    "Braga",
                    "Ranca Umpas",
                    "Tangkuban Perahu"
                ];

                foreach ($locations as $lokasi) {
                    
                    $sql = "SELECT gambar FROM locations WHERE lokasi='$lokasi'";
                    $result = $conn->query($sql);
                    $gambar = "123.png"; // Gambar default

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $gambar = $row['gambar'];
                    }
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/images/<?php echo $gambar; ?>" class="card-img-top" alt="<?php echo $lokasi; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lokasi; ?> - ❤️</h5>
                            <form action="Admin/upload.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="lokasi" value="<?php echo $lokasi; ?>">
                                <div class="form-group">
                                    <input type="file" class="btn" name="gambar" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

<section data-bs-version="5.1" class="footer7 cid-ufWrwHZs6d" once="footers" id="footer7-v">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © 2024 - Pesona Bandung - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script> 
<script src="assets/ytplayer/index.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script> 
<script src="assets/theme/js/script.js"></script>  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-DzPRoLnh1CXqbz8e7YTVP2GnjfRA5f3X7F6+df3E6LPU+7GC3z5Rxfkg9hCJvxz2" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+pyRkL3vL2/cR5/cMz+o2m8o5+NPqVhjN6J" crossorigin="anonymous"></script>

  
</body>
</html>