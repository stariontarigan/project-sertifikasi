<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- bootsrap -->

    <script src="https://kit.fontawesome.com/83d5593a90.js" crossorigin="anonymous"></script>
    <!-- font awsome -->

    <link rel="stylesheet" href="index.css">
    <!-- css vanilla -->
</head>
<body>
    

    <!-- bagian navigasi bar,merupakan tempat header atau tampilan palling atas pada bagian web yang pada ummunya terdapat pada web. -->
    <nav class="navbar navbar-expand-lg bg-danger fixed-top mb-5 mb-5">
        <div class="container-fluid" >
          <a class="navbar-brand" href="index.html"><img width="250px" src="gambar/logo.png"  alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex">
                <input class="form-control me-2 form-control-md" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary btn-dark me-lg-5" type="submit">Cari</button>
              </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link  fs-5 text-black" href="kategori.html">
                  Categori
                </a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link active fs-5" aria-current="page" href="promo.html">Deals</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link fs-5 text text-black " href="merek.html">Brand</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link fs-5 text-black" href=""><i class="fa-solid fa-bag-shopping"></i></a>
              </li>
            </ul>
            <ul class="list-group-flush">
                <li class="list-group">
                    <a href="" class="nav-link fs-5"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
  


    <!-- disini saya menambahkan satu tombol navigasi mengeneai saya karena sesuai arahan tugas harus ada nama pembuat didalam conten -->
    <nav class="navbar bg-body-tertiary biografi">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="http://lsp.bsi.ac.id/LSPBSI/">LSP UBSI</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"><span class="text-danger fs-6">Tentang Starion Tarigan</span>
      </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Biografi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3  fw-bolder">
                <li class="nav-item">
                  <label for="">Nama &ensp; &ensp; &ensp; &ensp; : Starion Tarigan</label>
                </li>
                <li class="nav-item">
                  <label for="">NIM  &ensp; &ensp; &ensp; &ensp; &ensp; : 77222107</label>
                  </li>
                <li class="nav-item">
                    <label for="">Asal Kampus  : Universitas Borobudur</label>
                  </li> 
                  <li class="nav-item">
                    <label for="">Email   &ensp; &ensp; &ensp; &ensp; &nbsp;: stariontarigan1030@gmail.com</label>
                  </li> 
                  <li class="nav-item mt-4">
                    <Img class="img-thumbnail " width="250px%" src="gambar/photoPP.jpg"></Img>
                  </li> 
              </ul>
            </div>
          </div>
        </div>
      </nav>


    <section class="gambarBackground  col-10 offset-1">
      <!-- form login  -->
      <div class="container mt-5">
        <h4 class="text-center pb-4 pt-5">Buat Akun Saya</h4>
        <div class="row">
          <!-- php form -->
          <form action="" method="post">
            <div class="col-md-6 offset-md-3">
                    <label class="form-label text-danger-emphasis">nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukkan nama anda">
                </div>
            
                <div class="col-md-6 offset-md-3 mt-4">
                    <label class="form-label text-danger-emphasis">email</label>
                    <input type="email" class="form-control" name="email" placeholder="masukkan email anda">
                </div> 

                <div class="col-md-6 offset-md-3 mt-4">
                    <label class="form-label text-danger-emphasis">no hp</label>
                    <input type="text" class="form-control" name="telephon" placeholder="masukkan no HP anda">
                </div>
                
                <div class="col-md-6 offset-md-3 mt-4">
                    <label class="form-label text-danger-emphasis">pasword</label>
                    <input type="password" class="form-control" name="pasword" placeholder="masukkan pasword">
                </div>
                <!-- tombol buat akun -->
              <div class="d-grid col-5 mx-auto pt-3">
              <button class="btn btn-danger" type="submit" value="" name="proses">simpan</button>
               </div>
              </form>
        </div>
      </div>



      <!-- text keterangan  -->
      <div class="container text-center mb-5" >
        <div class="row">
                <p>sudah mempunyai akun? <a href="" class="text-danger text-decoration-none">login dari sini</a></p>
        </div>
      </div>
    </section>
<!-- pemanggilan koneksi -->
<div class="container text-center mb-5 fs-5 fw-bolder"  >
<?php
include "koneksi.php";
if(isset($_POST[proses])){//artinya ketika tombol proses diklik maka 

  mysqli_query($koneksi,"insert into user set
  nama = '$_POST[nama]',
  email = '$_POST[email]',
  telephon = '$_POST[telephon]',
  pasword ='$_POST[pasword]'");

  echo "data  baru anda telah tersimpan";
}

?>
</div>




          <!-- footer,merupakan tampilan paling bawah pada halaman web  -->
<footer class="bg-danger mt-4">
    <div class="container">
        <div class="row pb-5">
            <div class="col-3 col-sm-3 mt-3">
                <p class="fs-6 fw-bold text-white">TENTANG TOKO KAMI</p>
                <a class="text-white text-decoration-none fw-light" href="">Tentang Kami</a><br>
                <a class="text-white text-decoration-none fw-light" href="">Blog</a><br>
                <a class="text-white text-decoration-none fw-light" href="">Kebijakan Privasi</a><br>
                <a class="text-white text-decoration-none fw-light" href="">Persyaratan dan Ketentuan</a>
            </div>
            <div class="col-3 col-sm-3 mt-3">
                <p class="fs-6 fw-bold text-white">MEDIA SOSIAL KAMI</p>
                <a class="text-white text-decoration-none fw-light" href="">instagram</a><br>
                <a class="text-white text-decoration-none fw-light" href="">facebook</a><br>
                <a class="text-white text-decoration-none fw-light" href="">youtube</a><br>
            </div>
            <div class="col-3 col-sm-3 mt-3">
                <p class="fs-6 fw-bold text-white">HUBUNGI KAMI</p>
                <a class="text-white text-decoration-none fw-light" href="">Untuk balasan yang lebih cepat,silakan gunakan fitu obrolan kami </a><br>
                <a class="text-white text-decoration-none fw-light" href="">Email: stariontarigan1030@gmail.com</a><br>
            </div>
            <div class="col-3 col-sm-3 mt-3">
                <p class="fs-6 fw-bold text-white">BERLANGGANAN KE TOKO KAMI</p>
                <label  class="form-label text-white fw-light">Email Anda</label>
                <input type="email" class="form-control" placeholder="Masukkan Email anda" >
                 <button type="submit" class="btn btn-dark">Kirim</button>
            </div>
        </div>
        <!-- baris 2 kolom 2 -->
  
        <div class="row pt-4 pb-5">
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/link.jpg" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/bc.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/bni.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/bri.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/dana.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/gopay.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/indomart.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/mandiri.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/ovo.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/permata.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/alfa.png" alt=""></a>
            </div>
            <div class="col-2 col-md-1">
                <a href=""><img class="img-thumbnail" src="gambar/visa.png" alt=""></a>
            </div>
        </div>
    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>