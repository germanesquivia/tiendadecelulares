<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>TIENDA DE CELULALES</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/cel-ico.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <link rel='stylesheet' href='font-awesome/css/font-awesome.min.css'>

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Bootslander - v2.1.0
        * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->

        <script lenguaje="javaScript">
            function funsumres(p_idelemento, p_sumres) {
                if ((parseInt(document.getElementById(p_idelemento).value) > 1) || (p_sumres > 0)) {
                    document.getElementById(p_idelemento).value = parseInt(document.getElementById(p_idelemento).value) + p_sumres;
                    document.getElementById('total').value = parseInt(document.getElementById(p_idelemento).value) * 29000;
                }
            }
        </script>
    </head>
    <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html"><span>Tienda de Celulares</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">Comprar</a></li>
                    <li><a href="#about">Acerca de</a></li>
                    <li><a href="#features">Caracteristicas</a></li>
                    <li><a href="#gallery">Galeria</a></li>
                    <li><a href="#team">Equipo</a></li>
                    <li><a href="#pricing">Landing Page</a></li>
                    <li><a href="#contact">Contactenos</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <form id='form1' name='form1' method='POST' action='index.php'>
                            <table class='table-sm table-nobordeless'>
                                <tr>
                                    <td class='text-white text-right font-weight-bold'>Marca:</td>
                                    <td>
                                        <select name='marca' id='marca' class='browser-default custom-select' onchange='this.form.submit()'>
                                            <option value='0' >Selecciona una Marca...</option>
                                            <option value='1' <?php if ( (isset($_POST['marca'])) && ($_POST['marca']==='1') ) { echo ' selected '; } ?> >Iphone</option>
                                            <option value='2' <?php if ( (isset($_POST['marca'])) && ($_POST['marca']==='2') ) { echo ' selected '; } ?> >Samsung</option>
                                            <option value='3' <?php if ( (isset($_POST['marca'])) && ($_POST['marca']==='3') ) { echo ' selected '; } ?> >Huawei</option>
                                            <option value='4' <?php if ( (isset($_POST['marca'])) && ($_POST['marca']==='4') ) { echo ' selected '; } ?> >Xiaomi</option>
                                            <option value='5' <?php if ( (isset($_POST['marca'])) && ($_POST['marca']==='5') ) { echo ' selected '; } ?> >LG</option>
                                            <option value='6' <?php if ( (isset($_POST['marca'])) && ($_POST['marca']==='6') ) { echo ' selected '; } ?> >Nokia</option>
                                            <option value='7' <?php if ( (isset($_POST['marca'])) && ($_POST['marca']==='7') ) { echo ' selected '; } ?> >Asus</option>
                                            <option value='8' <?php if ( (isset($_POST['marca'])) && ($_POST['marca']==='8') ) { echo ' selected '; } ?> >Motorola</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class='text-white text-right font-weight-bold'>Bateria:</td>
                                    <td>
                                        <select name='bateria' class='browser-default custom-select' onchange='this.form.submit()'>
                                        <option value='0' >Selecciona una Bateria...</option>
                                        <option value='1' <?php if ( (isset($_POST['bateria'])) && ($_POST['bateria']==='1') ) { echo ' selected '; } ?> >Niquel-Cadmio (NiCd)</option>
                                        <option value='2' <?php if ( (isset($_POST['bateria'])) && ($_POST['bateria']==='2') ) { echo ' selected '; } ?> >Niquel-Metal Hidruro (NiMH)</option>
                                        <option value='3' <?php if ( (isset($_POST['bateria'])) && ($_POST['bateria']==='3') ) { echo ' selected '; } ?> >iones de Litio</option>
                                    </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class='text-white text-right font-weight-bold'>Camara:</td>
                                    <td>
                                        <select name='camara' class='browser-default custom-select' onchange='this.form.submit()'>
                                        <option value='0' >Selecciona una Camara...</option>
                                        <option value='1' <?php if ( (isset($_POST['camara'])) && ($_POST['camara']==='1') ) { echo ' selected '; } ?> >Camaras Multiples</option>
                                        <option value='2' <?php if ( (isset($_POST['camara'])) && ($_POST['camara']==='2') ) { echo ' selected '; } ?> >Gran Angular</option>
                                        <option value='3' <?php if ( (isset($_POST['camara'])) && ($_POST['camara']==='3') ) { echo ' selected '; } ?> >Telefoto o Zoom</option>
                                        <option value='4' <?php if ( (isset($_POST['camara'])) && ($_POST['camara']==='4') ) { echo ' selected '; } ?> >Sensor de Profundidad</option>
                                    </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class='text-white text-right font-weight-bold'>Memoria ROM:</td>
                                    <td>
                                        <select name='memoria' class='browser-default custom-select' onchange='this.form.submit()'>
                                        <option value='0' >Selecciona una Memoria...</option>
                                        <option value='1' <?php if ( (isset($_POST['memoria'])) && ($_POST['memoria']==='1') ) { echo ' selected '; } ?> >128 GB</option>
                                        <option value='2' <?php if ( (isset($_POST['memoria'])) && ($_POST['memoria']==='2') ) { echo ' selected '; } ?> >256 GB</option>
                                        <option value='3' <?php if ( (isset($_POST['memoria'])) && ($_POST['memoria']==='3') ) { echo ' selected '; } ?> >512 GB</option>
                                        <option value='4' <?php if ( (isset($_POST['memoria'])) && ($_POST['memoria']==='4') ) { echo ' selected '; } ?> >1 TB</option>
                                    </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td align='center'>
                                        <table>
                                            <tr>
                                                <td>
                                                    <button name='btn_mas' id='btn_mas' class='btn btn-danger' onclick="funsumres('cantidad',-1)"><i class='fa fa-minus-circle fa-lg' aria-hidden='true'></i> </button>
                                                </td>
                                                <td>
                                                    <input type='text' class='form-control input-sm text-center text-white bg-dark font-weight-bold' name='cantidad' id='cantidad' value="<?php if (isset($_POST['cantidad'])) { echo $_POST['cantidad']; } else { echo '1'; } ?>" size='8' readonly>
                                                </td>
                                                <td>
                                                    <button name='btn_mas' id='btn_mas' class='btn btn-success' onclick="funsumres('cantidad',1)"><i class='fa fa-plus-circle fa-lg' aria-hidden='true'></i> </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class='text-white text-right font-weight-bold'>Total $</td>
                                    <td>
                                        <input type='text' class='form-control input-sm text-center text-dark bg-white font-weight-bold' 
                                            name='total' id='total' value="<?php if (isset($_POST['total'])) { echo $_POST['total']; } else { echo '29000'; } ?>" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan='3'>
                                        <button name='btn_comprar' id='btn_comprar' class="<?php echo ( isset($_POST[ 'marca']) && ($_POST[ 'marca']!='0') ) ? 'btn btn-warning btn-block' : 'btn btn-secondary btn-block'; ?>"
                                            <?php if ( !isset($_POST[ 'marca']) || ($_POST[ 'marca']=='0') ) { echo ' disabled '; } ?> 
                                            > <i class='fa fa-money fa-2x' aria-hidden='true'> PAGAR </i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/iPhone_HP_visual_3_EN.gif" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                        <h3>Somos una empresa de venta de celulares</h3>
                        <p>Enfocados en la satisfaccion del cliente, ofreciendo productos de alta calidad a buen precio.</p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Nuestro Lema</a></h4>
                            <p class="description">Satisfacer al Cliente</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Garantia</a></h4>
                            <p class="description">Todos nuestros productos tienen garantia</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Seguridad</a></h4>
                            <p class="description">Compra en linea de manera segura</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Caracteristicas</h2>
                    <p>Revisa las Caracteristicas</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Precios</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="">Garantia</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="">Transporte</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Atencion</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <h3><a href="">Asesoria</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Ofertas</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">Devoluciones</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                            <h3><a href="">App</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
                            <i class="ri-anchor-line" style="color: #b2904f;"></i>
                            <h3><a href="">Duos</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
                            <i class="ri-disc-line" style="color: #b20969;"></i>
                            <h3><a href="">Ideas</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <h3><a href="">Cambios</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
                            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                            <h3><a href="">Plan Separe</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up">232</span>
                            <p>Clientes Felices</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up">521</span>
                            <p>Proyectos</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span data-toggle="counter-up">1,463</span>
                            <p>Horas de Soporte</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up">15</span>
                            <p>Horas de Trabajo</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Details Section ======= -->

        <!-- End Details Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Galeria</h2>
                    <p>Revisa la Galeria</p>
                </div>

                <div class="row no-gutters" data-aos="fade-left">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                            <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                            <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Reyes</h3>
                        <h4>Ceo &amp; Fundador</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Perez</h3>
                        <h4>Diseñadora</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Yeni Fernandez</h3>
                        <h4>Almacenamiento</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Marcos Benitez</h3>
                        <h4>Independiente</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Martinez</h3>
                        <h4>Empresario</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Equipo</h2>
                    <p>Nuestro Gran Equipo</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter Blanco</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sara Gutierrez</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Gonzalez</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Perez</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">
                <div>
                    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTqFwrDJTZvx-K2j0A1ebK9YKjBv-NMviWeWZOBtoTM_b69GBOuWQ27IzWUKdIU6f0cKGKNdWvGdA2r/embed?start=true&loop=true&delayms=60000" 
                        frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" 
                        webkitallowfullscreen="true">
                    </iframe>
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        <!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contactenos</h2>
                    <p>Contactenos</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Direccion:</h4>
                                <p>Avenida Olaya Herrera # 72-384</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Telefono:</h4>
                                <p>+57 315 859 7496</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Bootslander</h3>
                            <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
                            <p>
                                A108 Adam Street <br> NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>