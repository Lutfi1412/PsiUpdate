<?php
session_start();
if (!isset($_SESSION["user_id"]))
  header("Location:index.php");

// db
include_once '../db/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../images/logo.jpeg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="robots" content="noindex">
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="expires" content="-1" />
  <title>
    <?= ucfirst(basename($_SERVER['PHP_SELF'], ".php")); ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <!-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- <link type="text/css" rel="stylesheet" href="http://jqueryte.com/css/jquery-te.css" charset="utf-8"> -->
  <link href="assets/css/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>

<body class="">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <div class="wrapper ">
    <!-- sidebar -->
    <?php
    include "sidebar.php";
    ?>
    <!-- disini tabel data -->
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <h1 class="navbar-brand" href="#"><b>PERSONAL STYLE INVENTORY</b></h1>
          </div>
        </div>
      </nav>

      <!-- tabel -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content" style="min-height: auto;">
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="min-height:400px;">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-8">
                    <h4 class="title">Data Hasil Tes Praktikan</h4>
                  </div>
                  <div class="col-md-4">
                    <a class="btn btn-block btn-round" target="_blank" href="export_excel.php" style="margin-top:0px;width:100px !important;float:right !important; background-color:#f96332;">Export Excel</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table id="tabel-data" class="table-sm table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>no.</th>
                      <th>npm</th>
                      <th>nama</th>
                      <th>kelas</th>
                      <th>suku</th>
                      <th>anak ke</th>
                      <th>saudara</th>
                      <th>gender</th>
                      <th>usia</th>
                      <th>pendidikan terakhir</th>
                      <th>skor</th>
                      <th>kategori</th>
                      <th>tingkat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $query = "SELECT * FROM hasil_praktikum_psi";
                    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    if (mysqli_num_rows($sql) > 0) {
                      while ($data = mysqli_fetch_array($sql)) { ?>
                        <tr>
                          <td style="word-break: break-all"><?= $no++ ?>.</td>
                          <td style="word-break: break-all"><?= $data['npm'] ?></td>
                          <td style="word-break: break-all"><?= $data['nama'] ?></td>
                          <td style="word-break: break-all"><?= $data['kelas'] ?></td>
                          <td style="word-break: break-all"><?= $data['suku'] ?></td>
                          <td style="word-break: break-all"><?= $data['anak_ke'] ?></td>
                          <td style="word-break: break-all"><?= $data['jumlah_anak'] ?></td>
                          <td style="word-break: break-all"><?= $data['jenis_kelamin'] ?></td>
                          <td style="word-break: break-all"><?= $data['usia'] ?></td>
                          <td style="word-break: break-all"><?= $data['pendidikan_terakhir'] ?></td>
                          <td style="word-break: break-all"><?= $data['skor'] ?></td>
                          <td style="word-break: break-all"><?= $data['kategori'] ?></td>
                          <td style="word-break: break-all"><?= $data['tingkat'] ?></td>
                        </tr>
                    <?php
                      }
                    } else {
                      echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
                <script>
                  $(document).ready(function() {
                    $('#tabel-data').DataTable();
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <!-- <script src="http://jqueryte.com/js/jquery-te-1.4.0.min.js"></script> -->
</body>

</html>