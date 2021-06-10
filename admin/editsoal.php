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

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

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
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
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
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->


    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


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

                        <div class="breadcrumbs">
                            <div class="col-sm-4">
                                <div class="page-header float-left">
                                    <div class="page-title">
                                        <h1>Input Soal</h1>
                                    </div>
                                </div>
                            </div>
                            <?php
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM tabel_soal WHERE id_soal='$id' ") or die(mysqli_error($koneksi));
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($query_mysql)) {
                                // echo implode(" ", array_keys($data));
                            ?>

                            <form method="post" action="editsoal_aksi.php">


                                <div class="form-group">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="pertanyaan" placeholder="Pertanyaan"
                                        value="<?php echo $data['pertanyaan'] ?>"><?php echo $data['pertanyaan'] ?></textarea>
                                    <input type="hidden" name="ids" value="<?php echo $data['id_soal'] ?>" />
                                </div>

                                <div class="form-group">
                                    <input name="pilihan_a" class="form-control" placeholder="Pilihan A"
                                        value="<?php echo $data['pilihan_a'] ?>" />
                                </div>

                                <div class="form-group">
                                    <input name="pilihan_b" class="form-control" placeholder="Pilihan B"
                                        value="<?php echo $data['pilihan_b'] ?>" />
                                </div>

                                <div class="form-group">
                                    <input name="pilihan_c" class="form-control" placeholder="Pilihan C"
                                        value="<?php echo $data['pilihan_c'] ?>" />
                                </div>

                                <div class="form-group">
                                    <input name="pilihan_d" class="form-control" placeholder="Pilihan D"
                                        value="<?php echo $data['pilihan_d'] ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Jawaban</label>
                                    <select name="jawaban" class="btn btn-default dropdown-toggle"
                                        value="<?php echo $data['jawaban'] ?>">
                                        <option value="a"
                                            <?= $data['jawaban'] == 'a'  ? ' selected="selected"' : ''; ?>>A</option>
                                        <option value="b"
                                            <?= $data['jawaban'] == 'b'  ? ' selected="selected"' : ''; ?>>B</option>
                                        <option value="c"
                                            <?= $data['jawaban'] == 'c'  ? ' selected="selected"' : ''; ?>>C</option>
                                        <option value="d"
                                            <?= $data['jawaban'] == 'd'  ? ' selected="selected"' : ''; ?>>D</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input name="update" type="submit" value="Update"
                                        class="btn btn-danger btn-lg" />&nbsp;
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>

        </header><!-- /header -->
        <!-- Header-->

    </div><!--  .content -->
    </div>
    <!--/#right-panel -->

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
