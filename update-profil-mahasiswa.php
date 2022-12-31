<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Profil Mahasiswa</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <style>
      .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
      .card-registration .select-arrow {
        top: 13px;
        }
    </style>
  </head>
  <body class="h-100">
    
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
            <!-- Profil -->
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                <li class="nav-item">
                    <a class="nav-link text-nowrap px-3" href="user-profile-lite.php" role="button" aria-haspopup="true" aria-expanded="false">
                      <img class="user-avatar rounded-circle mr-2" src="images/avatars/0.jpg" alt="User Avatar">
                      <span class="d-none d-md-inline-block">Sierra Brooks</span>
                    </a>
                  </li>
              
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <!-- end profil -->

          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="index-mahasiswa.php">
                  <i class="material-icons">insights</i>
                  <span>Progress Kerja Praktek</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="form-pendaftaran.php">
                  <i class="material-icons">edit_note</i>
                  <span>Daftar Kerja Praktek</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="form-surat-pengantar.php">
                  <i class="material-icons">picture_as_pdf</i>
                  <span>Surat Pengantar</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="upload-proposal.php">
                  <i class="material-icons">attach_file</i>
                  <span>Upload Proposal</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="monitoring-mahasiswa.php">
                  <i class="material-icons">monitor</i>
                  <span>Monitoring</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="upload-laporan.php">
                  <i class="material-icons">note_add</i>
                  <span>Upload Laporan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="penilaian.php">
                  <i class="material-icons">domain_verification</i>
                  <span>Penilaian</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="logout.php">
                  <i class="material-icons">logout</i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          
          <!-- profil -->
          <div class="main-content-container container-fluid px-4">
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <h3 class="page-title">Update Profil</h3>
              </div>
            </div>

            <!-- start -->
            <div class="row">
                <div class="col">
                  <div class="card card-small mb-4 pt-3">
                    
                    <!-- Biodata -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                          <div class="row">
                            <div class="col">
                              <form>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="nama_mahasiswa">Nama</label>
                                    <input type="text" class="form-control" id="nama_mahasiswa" value="Sierra"> </div>
                                  <div class="form-group col-md-6">
                                    <label for="NIM">NIM</label>
                                    <input type="text" class="form-control" id="NIM" value="200411100133" > </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="nama_dosen">Dosen Pembimbing</label>
                                    <input type="text" class="form-control" id="nama_dosen"value="Muhammad, S.Kom., M.Kom." readonly> </div>
                                  <div class="form-group col-md-6">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis_kelamin" placeholder="jenis_kelamin" value="Laki-laki" > </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal_lahir" value="13/05/2001" > </div>
                                  <div class="form-group col-md-6">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" id="agama" value="Islam" > </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" value="200411100133@student.trunojoyo.ac.id" readonly> </div>
                                  <div class="form-group col-md-6">
                                    <label for="status_KP">Status</label>
                                    <input type="text" class="form-control" id="status_KP" value="Sedang KP" readonly> </div>
                                  <div class="form-group col-md-6">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" value="bojonegoro" > </div>
                                </div>
                                <button type="submit" class="btn btn-accent">Update Profil</button>
                              </form>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <!-- end Biodata -->

                  </div>
                </div>
                
              </div>
            <!-- end -->


          </div>
          <?php
            include "footer.php";
          ?>
        </main>


          


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
  </body>
</html>