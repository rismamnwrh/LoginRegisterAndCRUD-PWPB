<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 Ciamis</title>
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
          <link rel="stylesheet" 
            href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" 
            integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" 
            crossorigin="anonymous"/>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">SMKN 1 CIAMIS</a>
          <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarText" 
                aria-controls="navbarText" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#major">Kejuruan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak Kami</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner" id="home">
          <div class="container text-center">
              <h1 class="display-1">SMKN 1 CIAMIS</h1>
              <h3 class="display-8">Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen,
                Pariwisata dan Teknologi Informasi dan Komunikasi,
                Melaksanakan pembelajaran berbasis Teknologi Informasi dan
                Komunikasi, Memenuhi fasilitas praktik dan bahan ajar sesuai
                dengan standar yang ditetapkan.</h3>
              <a href="index_login.php" class="btn btn-danger btn-lg">Daftar Sekarang</a>
          </div>
    </div>
    <!-- Tentang -->
    <div class="container-fluid about pt-5 pb-5">
          <div class="container text-center">
            <h2 class="display-3" id="about">Tentang Kami</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam, molestiae?</p>
            <div class="pt-5">
                <div class="pt-5 flex items-center justify-center rounded-lg text-center">
                  <iframe
                    class="w-full aspect-video"
                    src="https://www.youtube.com/embed/FZmbSq2W1hY"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen 
                    width="1000"
                    height="700"
                  ></iframe>
                </div>
              </div>
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fa-solid fa-chalkboard-user fa-5x"></i></span>                    
                    <h3 class="mt-3">
                        Guru Yang Berkompeten
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, corporis.</p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fa-solid fa-graduation-cap fa-5x"></i></span>                 
                    <h3 class="mt-3">
                        Lulusan Berkualitas
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, corporis.</p>
                </div>
                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fa-solid fa-school fa-5x"></i></span>
                    <h3 class="mt-3">
                        Fasilitas Lengkap
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, corporis.</p>
                </div>
            </div>
          </div>
    </div>
    <!-- Kejuruan -->
    <div class="container-fluid pt-5 pb-5 bg-light">
          <div class="container text-center">
              <h2 class="display-3" id="major">Kejuruan</h2>
              <p>Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen, Pariwisata dan Teknologi Informasi dan Komunikasi, Memiliki 7 kompetisi keahlian yaitu
              </p>
              <div class="row pt-4 gx-4 gy-4">
                  <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://bikin.website/wp-content/themes/twentynineteen-child/img/feature-page/img_responsive.png" 
                            class="card-img-top"
                            width="200"
                            height="200"
                        >
                        <div class="card-body">
                          <h5 class="card-title">Akuntansi</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Consectetur eos fugiat labore laboriosam omnis minus?</p>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://cdn.dribbble.com/users/1294892/screenshots/5574818/streaming-04.png" 
                            class="card-img-top"
                            width="200"
                            height="200"
                        >
                        <div class="card-body">
                          <h5 class="card-title">Pemasaran</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Consectetur eos fugiat labore laboriosam omnis minus?</p>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://media.suara.com/pictures/480x260/2020/04/18/15789-cara-membuat-website.jpg" 
                            class="card-img-top"
                            width="200"
                            height="200"
                        >
                        <div class="card-body">
                          <h5 class="card-title">Administrasi Perkantoran</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Consectetur eos fugiat labore laboriosam omnis minus?</p>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://trinetprimasolusi.net/wp-content/uploads/2019/11/Management-Information-System.jpg" 
                            class="card-img-top"
                            width="200"
                            height="200"
                        >
                        <div class="card-body">
                          <h5 class="card-title">Akomodasi Perhotelan</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Consectetur eos fugiat labore laboriosam omnis minus?</p>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://accounting.binus.ac.id/files/2019/07/KSInformationSystem-1515206840.jpg" 
                            class="card-img-top"
                            width="200"
                            height="200"
                        >
                        <div class="card-body">
                          <h5 class="card-title">Jasa Boga</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Consectetur eos fugiat labore laboriosam omnis minus?</p>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://i0.wp.com/quipperhome.wpcomstaging.com/wp-content/uploads/2019/04/45a18-template-image-blog-white-4.png?resize=800%2C533" 
                            class="card-img-top"
                            width="200"
                            height="200"
                        >
                        <div class="card-body">
                          <h5 class="card-title">Multimedia</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Consectetur eos fugiat labore laboriosam omnis minus?</p>
                        </div>
                      </div>
                  </div>

               
                  <center><div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://www.elsevier.com/__data/assets/image/0004/823261/information-system-supporting-science.jpg" 
                            class="card-img-top"
                            width="200"
                            height="200"
                        >
                        <div class="card-body">
                          <h5 class="card-title">Software Engineer</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                              Consectetur eos fugiat labore laboriosam omnis minus?</p>
                        </div>
                      </div>
                  </div>
                </center>

              </div>
          </div>
    </div>

    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
        <div class="container">
            <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, veniam.
            </p>
            <div class="row pb-3">
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3" 
                            type="text" 
                            placeholder="Nama"
                    >
                    <input class="form-control form-control-lg mb-3" 
                            type="text" 
                            placeholder="Email"
                    >
                    <input class="form-control form-control-lg" 
                            type="text" 
                            placeholder="No. Phone"
                    >                    
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-lg" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-3 mx-auto text-center">
                <button type="button" class="btn btn-danger btn-lg">Kirim Pesan</button>
            </div>
        </div>
    </div>
    <div class="container text-center pt-5 pb-5">
        &copy; 2021 SMK NEGERI 1 CIAMIS. All rights reserved. Created by Risma Munawaroh
    </div>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous">
    </script>
</body>
</html>
