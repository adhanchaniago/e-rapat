<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-RAPAT | Documentation</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ivandi Djoh Gah">
    <link rel="shortcut icon" href="http://localhost/rapat/assets/img/transport.svg">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="<?= base_url('assets/vendor/docs/fontawesome/js/all.js') ?>"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/docs/plugins/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/docs/plugins/prism/prism.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/docs/plugins/elegant_font/css/style.css') ?>">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/vendor/docs/css/styles.css') ?>">

</head>

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="">
                            <span aria-hidden="true" class="fas fa-calendar-alt"></span>
                            <span class="text-highlight">Dokumentasi </span> <span class="text-bold">E-RAPAT</span>
                        </a>
                    </h1>
                </div>
                <!--//branding-->

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Memulai Aplikasi E-RAPAT</li>
                </ol>
            </div>
            <!--//container-->
        </header>
        <!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <!-- <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Quick Start</h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: September 18th, 2020</div>
                </div> -->
                <!--//doc-header-->
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title">Panduan: Memulai Aplikasi <span class="text-highlight">E-RAPAT </span></h2>
                                <div class="section-block">
                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">e-rapat:</h4>
                                            <p>Aplikasi E-rapat merupakan platform yang dikembangkan oleh Badan Litbang Kementerian Perhubungan Republik Indonesia untuk memudahkan mengatur kegiatan rapat di unit eselon II di lingkungan Badan Litbang Kementerian Perhubungan agar proses administrasi terdokumentasi dengan baik.</p>
                                        </div>
                                        <!--//content-->
                                    </div>
                                </div>
                            </section>
                            <!--//doc-section-->
                            <section id="installation-section" class="doc-section">
                                <h2 class="section-title">Tampilan Antarmuka e-rapat</h2>
                                <div><img class="img-responsive" src="<?= base_url('assets/img/docs/000.png'); ?>" /></div>
                                <p class="callout-block callout-secondary">Tampilan Kalendar e-rapat</p>

                                <div id="step1" class="section-block">
                                    <h3 class="block-title">Pengaturan Tampilan kalender</h3>
                                    <div class="box-img"><img src="<?= base_url('assets/img/docs/001.png'); ?>"></div>
                                    <p class="callout-block callout-secondary">Blok tampilan diatas ini digunakan untuk mengatur tampilan kalendar berdasarkan Bulan, Minggu, Hari & juga tampilan List</p>

                                    <p class="garis"></p>
                                    <p class="box-img"><img src="<?= base_url('assets/img/docs/002.png'); ?>"></p>
                                    <p class="callout-block callout-secondary">Blok tampilan diatas ini digunakan untuk mengatur tampilan kalendar berdasarkan range jam/waktu</p>

                                    <p class="garis"></p>
                                    <p class="box-img"><img src="<?= base_url('assets/img/docs/003.png'); ?>"></p>
                                    <p class="callout-block callout-secondary">Blok tampilan diatas ini digunakan untuk Tampilkan / Sembunyikan Akhir Pekan (Sabtu - Minggu)</p>

                                    <!--//code-block-->
                                </div>
                                <!--//section-block-->
                                <div id="step2" class="section-block">
                                    <h3 class="block-title">Filter Kalender</h3>
                                    <div class="box-img"><img src="<?= base_url('assets/img/docs/004.png'); ?>"></div>
                                    <p class="callout-block callout-secondary">Blok tampilan diatas ini digunakan untuk memfilter Rapat berdasarkan Media Rapat yang dipergunakan</p>

                                    <p class="garis"></p>
                                    <p class="box-img"><img src="<?= base_url('assets/img/docs/005.png'); ?>"></p>
                                    <p class="callout-block callout-secondary">Blok tampilan diatas ini digunakan untuk memfilter Rapat berdasarkan Esalon 2</p>

                                    <p class="garis"></p>
                                    <p class="box-img"><img src="<?= base_url('assets/img/docs/006.png'); ?>"></p>
                                    <p class="callout-block callout-secondary">Blok tampilan diatas ini digunakan untuk memfilter Rapat yang dilakukan secara Online maupun secara Offline</p>
                                </div>
                                <!--//section-block-->
                                <div id="step3" class="section-block">
                                    <h3 class="block-title">Preview Kalendar</h3>
                                    <div><img class="img-responsive" src="<?= base_url('assets/img/docs/007.png'); ?>" /></div>
                                    <p class="callout-block callout-secondary">Tampilan Rapat Online</p>
                                    <p class="garis"></p>
                                    <div><img class="img-responsive" src="<?= base_url('assets/img/docs/008.png'); ?>" /></div>
                                    <p class="callout-block callout-secondary">Tampilan Rapat Offline</p>
                                </div>
                                <!--//section-block-->
                            </section>
                            <!--//doc-section-->

                            <section id="code-section" class="doc-section">
                                <h2 class="section-title">Tampilan Admin Cpanel</h2>
                                <!--//section-block-->
                                <div id="html" class="section-block">
                                    <div class="section-block">
                                        <h3 class="block-title">Tampilan Login</h3>
                                        <p class="callout-block callout-white">Blok tampilan dibawah ini adalah tampilan Login ke Admin Cpanel</p>
                                        <div><img class="img-responsive" src="<?= base_url('assets/img/docs/009.png'); ?>" /></div>
                                    </div>
                                </div>
                                <!--//section-block-->
                                <div id="css" class="section-block">
                                    <div class="code-block">
                                        <div class="section-block">
                                            <h3 class="block-title">Tampilan Halaman Profil</h3>
                                            <p class="callout-block callout-white">Blok tampilan dibawah ini adalah tampilan Halaman Profil pada Admin Cpanel</p>
                                            <div><img class="img-responsive" src="<?= base_url('assets/img/docs/010.png'); ?>" /></div>
                                        </div>
                                    </div>
                                    <!--//code-block-->
                                </div>
                                <!--//section-block-->
                                <div id="sass" class="section-block">
                                    <div class="code-block">
                                        <h6>SCSS Code Example</h6>
                                        <pre><code class="language-css">@mixin transform($property) {
  -webkit-transform: $property;
      -ms-transform: $property;
          transform: $property;
}

.box { @include transform(rotate(30deg)); }</code></pre>
                                    </div>
                                    <!--//code-block-->
                                </div>
                                <!--//section-block-->
                                <div id="less" class="section-block">
                                    <div class="code-block">
                                        <h6>LESS Code Example</h6>
                                        <pre><code class="language-css">@base: #f04615;
@width: 0.5;

.class {
  width: percentage(@width); // returns &#x60;50%&#x60;
  color: saturate(@base, 5%);
  background-color: spin(lighten(@base, 25%), 8);
}</code></pre>
                                    </div>
                                    <!--//code-block-->
                                </div>
                                <!--//section-block-->
                                <div id="javascript" class="section-block">
                                    <div class="code-block">
                                        <h6>JavaScript Code Example</h6>
                                        <pre><code class="language-javascript">&lt;script&gt; 
    function myFunction(a, b) { 
        return a * b; 
    } 
    
    document.getElementById(&quot;demo&quot;).innerHTML = myFunction(4, 3); 
&lt;/script&gt;</code></pre>
                                    </div>
                                    <!--//code-block-->
                                </div>
                                <!--//section-block-->
                                <div id="python" class="section-block">
                                    <div class="code-block">
                                        <h6>Python Code Example</h6>
                                        <pre><code class="language-python">&gt;&gt;&gt; x = int(input(&quot;
Please enter an integer: &quot;)) Please enter an integer: 42 
&gt;&gt;&gt; if x &lt; 0: 
... x = 0 
... print('Negative changed to zero') 
... elif x == 0: 
... print('Zero') 
... elif x == 1: 
... print('Single') 
... else: 
... print('More') 
... More</code></pre>
                                    </div>
                                    <!--//code-block-->
                                </div>
                                <!--//section-block-->
                                <div id="php" class="section-block">
                                    <div class="code-block">
                                        <h6>PHP Code Example</h6>
                                        <pre><code class="language-php">&lt;?php 
$txt = &quot;Hello world!&quot;; 
$x = 5; 
$y = 10.5; 

echo $txt; 
echo &quot;&lt;br&gt;&quot;; 
echo $x; 
echo &quot;&lt;br&gt;&quot;; 
echo $y; 
?&gt;</code></pre>
                                    </div>
                                    <!--//code-block-->
                                </div>
                                <!--//section-block-->
                                <div id="handlebars" class="section-block">
                                    <div class="code-block">
                                        <h6>Handlebars Code Example</h6>
                                        <pre><code class="language-handlebars">Handlebars.registerHelper('list', function(items, options) { 
  var out = &quot;&lt;ul&gt;&quot;; 
  
  for(var i=0, l=items.length; i&lt;l; i++) { 
    out = out + &quot;&lt;li&gt;&quot; + options.fn(items[i]) + &quot;&lt;/li&gt;&quot;; 
  } 
  
  return out + &quot;&lt;/ul&gt;&quot;; 
});</code></pre>
                                    </div>
                                    <!--//code-block-->
                                    <div class="code-block">
                                        <h6>Git Code Example</h6>
                                        <pre><code class="language-git">$ git add Documentation.txt</code></pre>
                                    </div>
                                    <!--//code-block-->
                                </div>
                                <!--//section-block-->
                            </section>
                            <!--//doc-section-->
                            <section id="callouts-section" class="doc-section">
                                <h2 class="section-title">Callouts</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                    </p>
                                </div>

                                <div class="section-block">
                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fas fa-info-circle"></i>
                                        </div>
                                        <!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Aenean imperdiet</h4>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a href="#">link example</a> sit aspernatur aut odit aut fugit.</p>
                                        </div>
                                        <!--//content-->
                                    </div>
                                    <!--//callout-block-->

                                    <div class="callout-block callout-warning">
                                        <div class="icon-holder">
                                            <i class="fas fa-bug"></i>
                                        </div>
                                        <!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Morbi posuere</h4>
                                            <p>Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a href="#">link example</a> tellus vel diam viverra elementum.</p>
                                        </div>
                                        <!--//content-->
                                    </div>
                                    <!--//callout-block-->

                                    <div class="callout-block callout-success">
                                        <div class="icon-holder">
                                            <i class="fas fa-thumbs-up"></i>
                                        </div>
                                        <!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Lorem ipsum dolor sit amet</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Link example</a> aenean commodo ligula eget dolor.</p>
                                        </div>
                                        <!--//content-->
                                    </div>
                                    <!--//callout-block-->

                                    <div class="callout-block callout-danger">
                                        <div class="icon-holder">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                        <!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Interdum et malesuada</h4>
                                            <p>Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut tellus. Aenean vestibulum <a href="#">Link example</a> maximus ipsum vel dignissim. Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. </p>
                                        </div>
                                        <!--//content-->
                                    </div>
                                    <!--//callout-block-->
                                </div>
                            </section>
                            <!--//doc-section-->
                            <section id="tables-section" class="doc-section">
                                <h2 class="section-title">Tables</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                </div>
                                <div class="section-block">
                                    <h6>Basic Table</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--//table-responsive-->
                                    <h6>Striped Table</h6>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--//table-responsive-->
                                    <h6>Bordered Table</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--//table-responsive-->
                                </div>
                                <!--//section-block-->
                            </section>
                            <!--//doc-section-->
                            <section id="buttons-section" class="doc-section">
                                <h2 class="section-title">Buttons</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <h6>Basic Buttons</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="#" class="btn btn-primary">Primary Button</a></li>
                                                <li><a href="#" class="btn btn-green">Green Button</a></li>
                                                <li><a href="#" class="btn btn-blue">Blue Button</a></li>
                                                <li><a href="#" class="btn btn-orange">Orange Button</a></li>
                                                <li><a href="#" class="btn btn-red">Red Button</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h6>CTA Buttons</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="#" class="btn btn-primary btn-cta"><i class="fas fa-download"></i> Download Now</a></li>
                                                <li><a href="#" class="btn btn-green btn-cta"><i class="fas fa-code-branch"></i> Fork Now</a></li>
                                                <li><a href="#" class="btn btn-blue btn-cta"><i class="fas fa-play-circle"></i> Find Out Now</a></li>
                                                <li><a href="#" class="btn btn-orange btn-cta"><i class="fas fa-bug"></i> Report Bugs</a></li>
                                                <li><a href="#" class="btn btn-red btn-cta"><i class="fas fa-exclamation-circle"></i> Submit Issues</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//section-block-->
                            </section>
                            <!--//doc-section-->
                            <section id="video-section" class="doc-section">
                                <h2 class="section-title">Video</h2>
                                <div class="section-block">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <h6>Responsive Video 16:9</h6>
                                            <!-- 16:9 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ejBkOjEG6F0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h6>Responsive Video 4:3</h6>
                                            <!-- 4:3 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ejBkOjEG6F0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//section-block-->
                                <section id="icons-section" class="doc-section">
                                    <h2 class="section-title">Icons</h2>
                                    <div class="section-block">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue.
                                        </p>
                                    </div>
                                    <!--//section-block-->
                                    <div class="section-block">
                                        <h6>Elegant Icon Font</h6>
                                        <a href="https://www.elegantthemes.com/blog/resources/elegant-icon-font" target="_blank"><img class="img-fluid" src="assets/images/demo/elegant-icon-font.jpg" alt="elegant icons" /></a>
                                    </div>
                                    <!--//section-block-->
                                    <div class="section-block">
                                        <h6>FontAwesome Icon Font</h6>
                                        <a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><img class="img-fluid" src="assets/images/demo/fontawesome-icons.png" alt="fontawesome" /></a>
                                    </div>
                                    <!--//section-block-->

                                </section>
                                <!--//doc-section-->

                            </section>
                            <!--//doc-section-->
                        </div>
                        <!--//content-inner-->
                    </div>
                    <!--//doc-content-->
                    <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                        <div id="doc-nav" class="doc-nav">

                            <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                                <a class="nav-link scrollto" href="#download-section"><i class="fas fa-fw fa-angle-right"></i> Memulai Aplikasi <strong>e-rapat</strong></a>
                                <a class="nav-link scrollto" href="#installation-section"><i class="fas fa-fw fa-angle-right"></i> <strong>Tampilan Antarmuka e-rapat</strong></a>
                                <nav class="doc-sub-menu nav flex-column">
                                    <a class="nav-link scrollto" href="#step1"><i class="fas fa-fw fa-angle-right"></i> Pengaturan Tampilan kalender</a>
                                    <a class="nav-link scrollto" href="#step2"><i class="fas fa-fw fa-angle-right"></i> Filter Kalender</a>
                                    <a class="nav-link scrollto" href="#step3"><i class="fas fa-fw fa-angle-right"></i> Preview Kalendar</a>
                                </nav>
                                <!--//nav-->
                                <a class="nav-link scrollto" href="#code-section"><i class="fas fa-fw fa-angle-right"></i> <strong>Tampilan Admin Cpanel</strong></a>
                                <nav class="doc-sub-menu nav flex-column">
                                    <a class="nav-link scrollto" href="#html"><i class="fas fa-fw fa-angle-right"></i> Halaman Login</a>
                                    <a class="nav-link scrollto" href="#css"><i class="fas fa-fw fa-angle-right"></i> Halaman Profil</a>
                                    <a class="nav-link scrollto" href="#sass">Sass</a>
                                    <a class="nav-link scrollto" href="#less">LESS</a>
                                    <a class="nav-link scrollto" href="#javascript">JavaScript</a>
                                    <a class="nav-link scrollto" href="#python">Python</a>
                                    <a class="nav-link scrollto" href="#php">PHP</a>
                                    <a class="nav-link scrollto" href="#handlebars">Handlebars</a>
                                </nav>
                                <!--//nav-->
                                <a class="nav-link scrollto" href="#callouts-section">Callouts</a>
                                <a class="nav-link scrollto" href="#tables-section">Tables</a>
                                <a class="nav-link scrollto" href="#buttons-section">Buttons</a>
                                <a class="nav-link scrollto" href="#video-section">Video</a>
                                <a class="nav-link scrollto" href="#icons-section">Icons</a>
                            </nav>
                            <!--//doc-menu-->

                        </div>
                    </div>
                    <!--//doc-sidebar-->
                </div>
                <!--//doc-body-->
            </div>
            <!--//container-->
        </div>
        <!--//doc-wrapper-->

        <div id="promo-block" class="promo-block">
            <div class="container">
                <div class="promo-block-inner">
                    <h3 class="promo-title text-center"><i class="fas fa-heart"></i> <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">Are you an ambitious and entrepreneurial developer?</a></h3>
                    <div class="row">
                        <div class="figure-holder col-lg-5 col-md-6 col-12">
                            <div class="figure-holder-inner">
                                <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank"><img class="img-fluid" src="assets/images/demo/instance-promo.jpg" alt="Instance Theme" /></a>
                                <a class="mask" href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/"><i class="icon fa fa-heart pink"></i></a>

                            </div>
                        </div>
                        <!--//figure-holder-->
                        <div class="content-holder col-lg-7 col-md-6 col-12">
                            <div class="content-holder-inner">
                                <div class="desc">
                                    <h4 class="content-title"><strong> Instance - Bootstrap 4 Portfolio Theme for Aspiring Developers</strong></h4>
                                    <p>Check out <a href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">Instance</a> - a Bootstrap personal portfolio theme I created for developers. The UX design is focused on selling a developer’s skills and experience to potential employers or clients, and has <strong class="highlight">all the winning ingredients to get you hired</strong>. It’s not only a HTML site template but also a marketing framework for you to <strong class="highlight">build an impressive online presence with a high conversion rate</strong>. </p>
                                    <p><strong class="highlight">[Tip for developers]:</strong> If your project is Open Source, you can use this area to promote your other projects or hold third party adverts like Bootstrap and FontAwesome do!</p>
                                    <a class="btn btn-cta" href="https://themes.3rdwavemedia.com/bootstrap-templates/portfolio/instance-bootstrap-portfolio-theme-for-developers/" target="_blank"><i class="fas fa-external-link-alt"></i> View Demo</a>

                                </div>
                                <!--//desc-->


                                <div class="author"><a href="https://themes.3rdwavemedia.com">Xiaoying Riley</a></div>
                            </div>
                            <!--//content-holder-inner-->
                        </div>
                        <!--//content-holder-->
                    </div>
                    <!--//row-->
                </div>
                <!--//promo-block-inner-->
            </div>
            <!--//container-->
        </div>
        <!--//promo-block-->

    </div>
    <!--//page-wrapper-->

    <footer id="footer" class="footer text-center">
        <div class="container">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="#" target="_blank">Ivandi</a> for developers</small>

        </div>
        <!--//container-->
    </footer>
    <!--//footer-->


    <!-- Main Javascript -->
    <script type="text/javascript" src="<?= base_url('assets/vendor/docs/plugins/jquery-3.4.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/vendor/docs/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/vendor/docs/plugins/prism/prism.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/vendor/docs/plugins/jquery-scrollTo/jquery.scrollTo.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/vendor/docs/plugins/stickyfill/dist/stickyfill.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/vendor/docs/js/main.js') ?>"></script>

</body>

</html>