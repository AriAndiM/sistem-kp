<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Penilaian Kerja Praktek</title>
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
                  <a class="nav-link text-nowrap px-3" href="profil-mahasiswa.php" role="button" aria-haspopup="true" aria-expanded="false">
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
                <a class="nav-link active" href="penilaian.php">
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
          
          <!-- penilaian -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
                <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                  <h3 class="page-title">Penilaian Pembimbing Lapangan</h3>
                </div>
              </div>
              <!-- End Page Header -->

            <!-- nama dan nim mhs -->
            <div style="margin-bottom: 25px;">
                <table>
                    <tr>
                        <td>Nama &nbsp</td>
                        <td>: &nbsp</td>
                        <td>Ari Andi Mustofa</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td>200411100133</td>
                    </tr>
                </table>
            </div>
            <!-- end nama dan nim mhs -->

          <!-- Default Light Table -->
          <div class="row">
            <div class="col">
              <div class="card card-small mb-4">
                <div class="card-body p-0 pb-3 text-center">
                  <table class="table table-bordered">
                    <thead class="bg-light">
                      <tr>
                        <th scope="col" class="border-0">Kriteria</th>
                        <th scope="col" class="border-0">Bobot (%)</th>
                        <th scope="col" class="border-0">Nilai(0 ??? 100)</th>
                        <th scope="col" class="border-0">Nilai Huruf **)</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: left;">
                      <tr>
                        <th colspan="4">Dari Perusahaan</th>
                      </tr>
                      <tr>
                        <td>Kemampuan menyelesaikan tugas</td>
                        <td style="text-align: center;">20</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Tingkah laku/ sikap</td>
                        <td style="text-align: center;">10</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Kedisiplinan</td>
                        <td style="text-align: center;">10</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th colspan="3" style="text-align: center;">TOTAL</th>
                        <td></td>
                      </tr>
                      <tr>
                        <th colspan="3" style="text-align: center;">NILAI HURUF***)</th>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table" style="text-align: left;">
                    <tr>
                      <td></td>
                      <td style="width: 300px; padding: 3px;"><b>Nilai Sidang Kerja Praktek = ... </b> <br> Bangkalan,...../..../.... <br> Pembimbing Lapangan <br> <br> <br> <br> <br> <br> <b>Pembimbing Lapangan</b> <br> NIP. </td>
                    </tr>
                  </table>
                  <div style="text-align: left;">
                    <a class="nav-link " href="cetak-penilaian-instansi.php">
                      <button type="button" class="mb-2 btn btn-outline-primary mr-2"><i class="material-icons">print</i>
                      <span>Cetak</span></button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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