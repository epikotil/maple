<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Maple
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
        id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
                    Maple </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <style>
            .tmbl {
                display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                user-select: none;
                border: 1px solid transparent;
                padding: 0.46875rem 1rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                cursor: pointer;
            }

            .tmbl-link {
                font-weight: 400;
                color: black;
                background-color: transparent;
            }

            .biru {
                display: inline-block;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                user-select: none;
                border: 1px solid transparent;
                padding: 0.46875rem 1rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                cursor: pointer;
                font-weight: 200;
                font-size: 15px;
                color: blue;
                background-color: transparent;
                font-family: "Roboto Slab", "Times New Roman", serif;
            }
            </style>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="course.php" class="tmbl tmbl-link">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a href="login-page.html" class="tmbl tmbl-link">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <form method="post" action="tambahsoal_aksi.php">

        <div class="section text-center">
            <div class="main main-raised">
                <div class="section text-center">
                    <div class="container">
                        <div class="section text-center">
                            <div class="row">
                                <div class="col-md-8 ml-auto mr-auto">
                                    <h2 class="title">Soal</h2>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            Pilihan A
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            Pilihan B
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            Pilihan C
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>













                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            Pilihan D
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!--  End Modal -->
                            <footer class="footer" data-background-color="black">
                                <div class="container">
                                    <nav class="float-left">

                                </div>
                            </footer>
                            <!--   Core JS Files   -->
                            <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
                            <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
                            <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript">
                            </script>
                            <script src="./assets/js/plugins/moment.min.js"></script>
                            <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
                            <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript">
                            </script>
                            <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
                            <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript">
                            </script>
                            <!--  Google Maps Plugin    -->
                            <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
                            <script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript">
                            </script>
                            <script>
                            $(document).ready(function() {
                                //init DateTimePickers
                                materialKit.initFormExtendedDatetimepickers();

                                // Sliders Init
                                materialKit.initSliders();
                            });


                            function scrollToDownload() {
                                if ($('.section-download').length != 0) {
                                    $("html, body").animate({
                                        scrollTop: $('.section-download').offset().top
                                    }, 1000);
                                }
                            }
                            </script>
</body>

</html>