<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maple Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="images/maple.png">
    <link rel="shortcut icon" href="images/maple.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./" class="fab fa-canadian-maple-leaf"></i>Maple Administrator</a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="inputsoal.php"> </i>Input Soal </a>
                    </li>
                    <li>
                        <a href="datauser.php"></i>Data User</a>
                    </li>
                    <li>
                        <a href="lihatsoal.php"></i>Lihat Soal</a>
                    </li>
                    <li>
                        <a href="hasilujian.php"> </i>Hasil Ujian </a>
                    </li>
                    <li>
                        <a href="profile.php"> </i>My Profile</a>
                    </li>
                    <li>
                        <a href="logout.php"> </i>Logout</a>
                    </li>
                    <li>
                        <a href="hasilujian.php"> </i>Halaman Utama </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <div class="card-header "> </div>
        <div class="card-body">
            <!-- Header-->


            <!-- Right Panel -->

            <div id="right-panel" class="right-panel">

                <!-- Header-->


                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            </header><!-- /header -->
            <!-- Header-->
            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Id User</th>
                        <th>Jumlah Soal Benar</th>
                        <th>Jumlah Soal Salah</th>
                        <th>Jumlah Soal Kosong</th>
                        <th>Nilai</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php
                include "koneksi.php";
                $query_mysql = mysqli_query($koneksi, "SELECT * FROM tabel_nilai") or die(mysqli_error($koneksi));
                $nomor = 1;
                while ($data = mysqli_fetch_array($query_mysql)) : ?>

                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['id_user']; ?></td>
                    <td><?php echo $data['benar']; ?></td>
                    <td><?php echo $data['salah']; ?></td>
                    <td><?php echo $data['kosong']; ?></td>
                    <td><?php echo $data['point']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="hapusnilai.php?id=<?php echo $data['id_nilai']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
    </script>

</body>

</html>
