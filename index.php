<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/boxicons.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Company Profile</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
  <!-- Nvbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand logo-text" href="#">DITYA PLAFON PVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Kenapa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Keunggulan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang.php">barang</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="#contact">Kontak</a>

          </li>


      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <!-- Home -->
  <section id="home">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <h1 class="text-white display-4">DITYA PLAFON PVC</h1>
          <p class="text-white">
            perusahaan pabrik produsen bahan bangunan pelengkap dari estetika atap plafon yang merupakan produk inovasi teknologi terkini dan ramah lingkungan berbahan dasar PVC ( Poly Vinyl Chloride ) atau lebih dikenal dengan sebutan
            Plafon PVC
          </p>
          <a href="#contact" class="btn btn-brand">Contact</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Home -->
  <!-- Service -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-12 section-intro">
          <h1>MENGAPA ANDA HARUS MEMILIH DITYA PLAFON PVC ???</h1>
          <div class="hline"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-box">
            <i class="bx bxs-check-shield"></i>
          </div>
          <h4 class="title-sm mt-4">PRODUK INDONESIA</h4>
          <p>Ditya Plafon Pvc merupakan Produk yang telah diproduksi di Indonesia, Pabrik yang berlokasi di Pati, sehingga untuk ketersediaan barang dan kelengkapan motif tidak perlu diragukan.</p>
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-box">
            <i class="bx bxs-check-shield"></i>
          </div>
          <h4 class="title-sm mt-4">GARANSI 10 TAHUN</h4>
          <p>Ditya Plafon Pvc Pertama dan Satu-Satunya yang berani memberikan Jaminan Garansi 10 Tahun, Sebagai Bentuk Tanggung Jawab Kami terhadap Konsumen. Ditya plafon Pvc Product Berkwalitas yang terbaik untuk Anda.</p>
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-box">
            <i class="bx bxs-check-shield"></i>
          </div>
          <h4 class="title-sm mt-4">SERVICE & BERPENGALAMAN</h4>
          <p>Didukung dengan Tim yang Profesional dan sudah berpengalaman dalam bidangnya Ditya Plafon Pvc siap dalam membantu Anda</p>
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-box">
            <i class="bx bxs-check-shield"></i>
          </div>
          <h4 class="title-sm mt-4">MUTU & KWALITAS PRODUCT</h4>
          <p>Ditya Plafon Pvc menggunakan kwalitas mutu bahan prima dan unggulan bukan dari campuran bahan daur ulang (recylce), sehingga umur pemakaian Ditya Plafon PVC bisa mencapai belasan Tahun bahkan sampai puluhan Tahun</p>
        </div>
        <div class="col-lg-4">
          <img src="img/Hidden person-pana.svg" alt="" />
        </div>
        <div class="col-lg-4 col-sm-6 p-4">
          <div class="icon-box">
            <i class="bx bxs-check-shield"></i>
          </div>
          <h4 class="title-sm mt-4">HARGA</h4>
          <p>Kami memberikan Solusi Pilihan Harga yang beraneka ragam sehingga Ditya Plafon Pvc dapat menjangkau semua kalangan masyarakat Indonesia. Dengan Harga yang relatif murah dan bersahabat.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Service -->

  <!-- Galery -->
  <section id="portfolio" class="row g-0 py-0">
    <?php
    $query = "SELECT * FROM barang";
    $result = mysqli_query($koneksi, $query);
    $count = 0;

    for ($i = 0; $i < 3; $i++) {
      if ($data = mysqli_fetch_assoc($result)) {
        $count++;
    ?>
        <div class="col-lg-4 col-sm-6">
          <div class="portfolio-item">
            <img src="foto/<?php echo $data['foto']; ?>" width="500" height="450">
            <div class="portfolio-overlay">
              <div>
                <h3><?php echo $data['nm_barang']; ?></h3>
                <h6><?php echo $data['deskripsi']; ?></h6>
              </div>
            </div>
          </div>
        </div>
    <?php
      } else {
        break; // Berhenti jika sudah tidak ada data lagi
      }
    }
    ?>

  </section>
  <!-- Akhir Galery -->
  <br>
  <br>
  <br>
  <center>
    <a href="barang.php" class="btn btn-brand">Show More</a>
  </center>
  <!-- Fitur -->
  <section id="features">


    <div class="container">
      <div class="row">
        <div class="col-12 section-intro">
          <h1>KEUNGGULAN DITYA PLAFON PVC</h1>
          <div class="hline"></div>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-lg-4 col-sm-6 feature d-flex">
          <div class="icon-box me-3">
            <i class="bx bx-check"></i>
          </div>
          <div>
            <h5 class="title-sm">TAHAN AIR / BASAH</h5>
            <p>Atap / Dek / Lantai / Bak Air Bocor? Tidak Akan Masalah Buat Produk Ini Karena Bahan Plafon Terbuat Dari Plastik PVC, seperti bahan Pipa Paralon atau Pintu Pvc Kamar Mandi</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 feature d-flex">
          <div class="icon-box me-3">
            <i class="bx bx-check"></i>
          </div>
          <div>
            <h5 class="title-sm">ANTI RAYAP / SERANGGA</h5>
            <p>Karena Produk Ini Berbahan Dasar Polymer Isosianat, tidak akan rusak dimakan rayap / serangga.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 feature d-flex">
          <div class="icon-box me-3">
            <i class="bx bx-check"></i>
          </div>
          <div>
            <h5 class="title-sm">TIDAK MERAMBAT API</h5>
            <p>Bahan Tidak Mudah Terbakar, Tidak Menyala, Dan Tidak Meleleh Serta Tidak Menghantar Api Sehingga Aman Bagi Anda Dan Sekeliling Anda</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 feature d-flex">
          <div class="icon-box me-3">
            <i class="bx bx-check"></i>
          </div>
          <div>
            <h5 class="title-sm">RAGAM PILIHAN MOTIF & DESIGN</h5>
            <p>Berbagai Variasi Bentuk Design Dan Motif dapat Dikombinasikan Dengan Produk Atau Bahan Lainnya.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 feature d-flex">
          <div class="icon-box me-3">
            <i class="bx bx-check"></i>
          </div>
          <div>
            <h5 class="title-sm">RINGAN</h5>
            <p>1M2 Hanya 3 Kg, tahan gempa, lebih hemat konstruksi dan hemat rangka</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 feature d-flex">
          <div class="icon-box me-3">
            <i class="bx bx-check"></i>
          </div>
          <div>
            <h5 class="title-sm">BEBAS BIAYA PERAWATAN</h5>
            <p>Mudah dibersihkan, Sekali Terpasang, Tidak Akan Ada Lagi biaya Mahal Untuk Perawatan yang Dikeluarkan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Fitur -->

  <!-- Kontak -->
  <section id="contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <img src="img/Work chat-rafiki.svg" alt="" />
        </div>
        <div class="col-lg-6 offset-lg-1">
          <form action="simpan.php" method="POST">
            <div class="mb-3">
              <small>Name</small>
              <input type="text" name="nama" required class="form-control" id="inputName" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
              <small>Email</small>
              <input type="email" name="email" required class="form-control" id="inputEmail" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
              <small>Pesan</small>
              <textarea name="pesan" style="resize: none;" id="inputPesan" cols="30" required rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" onclick="submited()">
              <div class="svg-wrapper-1">
                <div class="svg-wrapper">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                  </svg>
                </div>
              </div>
              <span>Send</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Kontak -->

  <!-- Ajakan -->
  <section id="cta" class="py-5" style="text-align: center;">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="center">
          <h3 class="text-white">Ayo Perindah Rumah Anda</h3>
        </div>
      </div>
  </section>
  <!-- Akhir Ajakan -->

  <!-- Footer -->
  <footer style="width: 70%; margin: auto;">
    <div class=" footer-top">
      <div class="container">
        <div class="row gy-5" style="display: flex; justify-content: center;">
          <div class="col-md-4">
            <h4 class="logo-text">Ditya Plafon Pvc</h4>
            <p>Anda dapat menghubungi kami di <br> sosial media yang berada di bawah ini</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/geprek.blimbing"><i class="bx bxl-facebook"></i></a>
              <a href="#"><i class="bx bxl-twitter"></i></a>
              <a href="#"><i class="bx bxl-instagram"></i></a>
              <a href="#"><i class="bx bxl-github"></i></a>
            </div>
          </div>
          <div class="col-md-2">
            <h5 class="title-sm">Navigation</h5>
            <div class="footer-links">
              <a href="#home">home</a>
              <a href="#services">kenapa</a>
              <a href="#portofolio">galery</a>
              <a href="#contact">kontak</a>
            </div>
          </div>

          <div class="col-md-4">
            <h5 class="title-sm">Contact</h5>
            <div class="footer-links">
              <p class="mb">Jl. Raya Jaken, Ngulakan, Sumberejo, Jaken, Kabupaten Pati, Jawa Tengah 59184, Indonesia</p>
              <p class="mb">0812-3961-5946</p>
              <p class="mb">Dityaplafon@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- AKhir Footer -->

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>