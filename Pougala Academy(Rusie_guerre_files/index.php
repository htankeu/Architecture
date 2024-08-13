<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Pougala Academy</title>
  <!--Seo meta tags-->
  <meta name="description" content="Pougala Academy">
  <meta name="keywords" content="Agriculture, Science, Société, Economie, Religions, Géostratégie, Histoire..">

  <!--Required Meta Tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Robot meta tags-->
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">

  <!--App manifest-->
  <link rel="manifest" href="./statics/assets/js/manifest.json">
  <!--Favicon-->
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <meta name="theme-color" content="#ffffff">
  <!--Google Fonts-->
  <link href="//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C400i%2C600%2C700%7CRoboto%3A400%2C400i%2C500%2C700" rel="stylesheet">

  <!--Vendor Styles-->
  <link rel="stylesheet" href="./statics/assets/vendor/fontawesome-free/css/all.min.css">
  <!--Theme Styles-->
  <link rel="stylesheet" href="./statics/assets/css/theme.css">
  <!--Bootstrap customizer-->
  <link rel="stylesheet" type="text/css" href="./statics/assets/vendor/bootstrap-customizer/css/bootstrap-customizer.css">
  
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #6c63ff;
  color: white;
  padding: 4px 5px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  left: 28px;
  width: 140px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  left: 15px;
  border: 3px solid #6c63ff;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 1px;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 5px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #6c63ff;
  color: white;
  padding: 6px 8px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #6c63ff;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.post-content img {
    width: 100% !important;
    height: auto !important;
}

.post-content p {
 /* These are technically the same, but use both */
  overflow-wrap: break-word;
  word-wrap: break-word;

  -ms-word-break: break-all;
  /* This is the dangerous one in WebKit, as it breaks things wherever */
  word-break: break-all;
  /* Instead use this non-standard one: */
  word-break: break-word;

  /* Adds a hyphen where the word breaks, if supported (No Blink) */
  -ms-hyphens: auto;
  -moz-hyphens: auto;
  -webkit-hyphens: auto;
  hyphens: auto;
}

.unselectable {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>
</head>

<body class="bg-repeat font-family unselectable" >
  <!--Skippy-->
  <a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container">
      <span class="skiplink-text">....</span>
    </div>
  </a>
  <!--Background image-->
  <div class="bg-image"></div>
  <!-- ========== WRAPPER ========== -->
  <div class="wrapper">
    <!--Header start-->
    <header class="header">
      <!--top mobile menu start-->
      <div class="top-menu bg-white">
        <div class="container">
          <!--Navbar Mobile-->
          <nav class="navbar navbar-expand d-lg-none navbar-light px-0">
            <div id="navbar-mobile" class="collapse navbar-collapse nav-top-mobile">
              <!--Top left menu-->
              <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" data-toggle="modal" href="#login">Se connecter</a></li>
                              </ul>
              <!--Top right menu-->
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/Geostrategieafricaine" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="https://instagram.com/iegeducation?igshid=808ja6o7n7iz" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
              <!--end top right menu-->
            </div>
          </nav>
          <!-- End Navbar Mobile-->
        </div>
      </div>
      <!-- end top mobile menu -->

      <!-- top menu -->
      <div class="top-menu bg-secondary">
        <div class="container">
          <!--Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark px-0 py-0">
            <!--Hamburger button-->
            <a id="showLeftPush" class="navbar-toggler side-hamburger border-0 px-0" href="#">
              <span class="hamburger-icon">
                <span></span><span></span><span></span><span></span>
              </span>
            </a>
            <!-- Mobile logo -->
            <a href="index.php">
              <img class="mobile-logo img-fluid d-lg-none mx-auto" src="#" alt="">
            </a>
            <!--Right Toggle Button-->
            <button class="navbar-toggler px-0" type="button" data-toggle="modal" data-target="#search_modal" aria-controls="navbarTogglerDemo2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-search"></span>
            </button>
            <!--Top Navbar-->
            <div id="navbarTogglerDemo" class="collapse navbar-collapse">
              <!-- Time -->
              <div class="date-area d-none d-lg-block">
                <time class="navbar-text mr-2" datetime="2019-10-28">2022-12-16</time>
              </div>
              <!--Top left menu-->
              <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" data-toggle="modal" href="#login">Se connecter</a></li>
                              </ul>
              <!--end top left menu-->
              <!--Top right menu-->
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/Geostrategieafricaine" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="https://instagram.com/iegeducation?igshid=808ja6o7n7iz" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
              <!--end top right menu-->
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
      <!--end top menu-->

      <!--start second header-->
      <div class="second-header">
        <div class="container">
          <div class="row">
            <!--Left content logo-->
            <div class="col-lg-4">
              <div id="main-logo" class="main-logo my-2 my-lg-4 d-none d-lg-block">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="./statics/img/LogoIEG.png" alt="Logo site">
                </a>
              </div>
            </div>
            <!--Right content ads-->
            <div class="col-lg-8">
              <div class="my-2 my-md-3 my-lg-4 d-none d-md-block text-center">
                <a href="#" target="_blank">
                  
                </a>
              </div>
            </div>
            <!--search mobile-->
            <!--div class="collapse navbar-collapse col-12 py-2" id="navbarTogglerDemo2">
              <form class="form-inline" action="../category/search.html">
                <div class="input-group w-100 bg-white">
                  <input type="text" class="form-control border border-right-0" placeholder="Search..." aria-label="search">
                  <div class="input-group-prepend bg-light-dark">
                    <button class="btn bg-transparent border-left-0 input-group-text border" type="submit"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div-->
            <!--end search mobile-->
          </div>
        </div>
      </div>
      <!--End second header-->
    </header>
    <!--End header-->

    <!--Main menu-->
    <div id="showbacktop" class="full-nav bg-white border-none border-lg-1 border-bottom shadow-b-sm py-0">
      <div class="container">
        <nav id="main-menu" class="main-menu navbar navbar-expand-lg navbar-light px-2 px-lg-0 py-0">
          <!--Navbar menu-->
          <div id="navbarTogglerDemo1" class="collapse navbar-collapse hover-mode">
            <!-- logo in navbar -->
            <div class="logo-showbacktop">
              <a href="#">
                <img class="img-fluid" src="./statics/img/LogoIEG.png" alt="Logo site">
              </a>
            </div>

            <!--left main menu start-->
            <ul id="left-main" class="navbar-nav main-nav navbar-uppercase first-left-lg-0">
              <li class="nav-item">
                <a id="navbarhome" class="nav-link    " href="index.php?p=home" >Accueil</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link   " href="#footer">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown1" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                <!--link-->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=1">Agriculture</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=2">Science</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=3">Economie</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=4">archives</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=5">culture</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=6">video</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=7">bibliotheque</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=8">religions</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=9">geostrategies</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=10">histoires</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=11">divers</a></li>
                                      <li><a class="dropdown-item" href="index.php?p=categorie&categieid=12">Société</a></li>
                                  </ul>
              </li>
                          </ul>
            <!--end left main menu-->

            <!--Search form-->
            <div class="navbar-nav ml-auto d-none d-lg-block">
              <div class="dropdown dropleft">
                <!--button-->
                <button id="dropdownMenuButton" class="btn btn-light bg-transparent border-0" type="button" data-toggle="modal" data-target="#search_modal"  aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-search"></i>
                </button>
                <!--hide search-->
                <!--div class="dropdown-menu no-shadow border-0 py-0" aria-labelledby="dropdownMenuButton">
                  <form class="form-inline" action="../category/search.html">
                    <div class="input-group">
                      <input type="text" class="form-control" name="keywords" value="" placeholder="Search..." aria-label="search">
                    </div>
                  </form>
                </div-->
                <!--end hide search-->
              </div>
            </div>
            <!--end search form-->
          </div>
          <!--End navbar menu-->
        </nav>
      </div>
    </div>
    <!-- End main menu -->

    <!-- sidebar mobile menu -->
    <div class="mobile-side">
      <!--Left Mobile menu-->
      <a href="#" class="back-menu">
        <span class="hamburger-icon open">
          <span></span><span></span><span></span><span></span>
        </span>
      </a>
      <nav id="mobile-menu" class="menu-mobile d-flex flex-column push push-left shadow-r-sm bg-white">
        <!-- mobile menu content -->
        <div class="mobile-content mb-auto">
          <!--logo-->
          <div class="logo-sidenav p-2">
            <a href="#">
              <img src="./statics/img/LogoIEG.png" class="img-fluid" alt="Pougala Academy">
            </a>
          </div>
          <!--navigation-->
          <div class="sidenav-menu">
            <nav class="navbar navbar-inverse">
              <ul id="side-menu" class="nav navbar-nav list-group list-unstyled side-link">
                  <li class="nav-item">
                        <a id="navbarhome" class="nav-link    " href="index.php?p=home" >Accueil</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link   " href="#footer">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown1" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                    <!--link-->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=1">Agriculture</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=2">Science</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=3">Economie</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=4">archives</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=5">culture</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=6">video</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=7">bibliotheque</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=8">religions</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=9">geostrategies</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=10">histoires</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=11">divers</a></li>
                                              <li><a class="dropdown-item" href="index.php?p=categorie&categieid=12">Société</a></li>
                                          </ul>
                  </li>
                                </ul>
            </nav>
          </div>
        </div>
        <!-- copyright mobile sidebar menu -->
        <div class="mobile-copyright mt-5 text-center">
          <p>Copyright <a href="#">Pougala Academy</a> - All right reserved</p>
        </div>
      </nav>
    </div>
    <!-- end sidebar mobile menu -->

    <!--Content start-->
    <main id="content">
      <div class="container">
        <div class="row">
            <div class="col-12 mt-05">
            <!--Slider ticker-->
            <div class="row py-2">
              <!--Breaking box-->
              <div class="col-2 col-sm-1 col-md-3 col-lg-2 py-1 pr-md-0 mb-md-1">
                <div class="d-inline-block d-md-block bg-primary text-white text-center breaking-caret py-1 px-2">
                  <span class="fas fa-bolt" title="Breaking News"></span>
                  <span class="d-none d-md-inline-block">Dernières nouvelles</span>
                </div>
              </div>
              <!--Breaking content-->
              <div class="col-10 col-sm-11 col-md-9 col-lg-10 pl-1 pl-md-2">
                <div class="breaking-box">
                  <div id="carouselbreaking" class="carousel slide" data-ride="carousel">
                    <!--breaking news-->
                    <div class="carousel-inner">
                      <!--list post-->
                                              <div class="carousel-item active aribudin">
                           <a class="h6 font-weight-light" >Obtenez tous vos articles regroupés en catégorie</a>
                        </div>
                        <!--list post-->
                        <div class="carousel-item aribudin">
                          <a class="h6 font-weight-light" >En cliquant sur la catégorie de votre choix </a>
                        </div>
                        <!--list post-->
                        <div class="carousel-item aribudin">
                          <a class="h6 font-weight-light" >Exemple: Science</a>
                        </div> 
                                          </div><!--end breaking news-->
                    <!--navigation slider-->
                    <div class="navigation-box p-2 d-none d-sm-block">
                      <!--nav left-->
                      <a class="carousel-control-prev text-primary" href="#carouselbreaking" role="button" data-slide="prev">
                        <i class="fa fa-angle-left rtl-180" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <!--nav right-->
                      <a class="carousel-control-next text-primary" href="#carouselbreaking" role="button" data-slide="next">
                        <i class="fa fa-angle-right rtl-180" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div><!--end navigation slider-->
                  </div>
                </div>
              </div>
            </div>
            <!--End slider ticker-->
            </div>
                <!-- title -->
    <div class="col-12">
      <div class="post-title mb-3">
        <h1 class="entry-title display-4 display-2-lg mt-2">971- La guerre Russie-Otan en Ukraine vue d’Afrique en 100 Questions-Réponses au 10ème mois  (Leçon de stratégies militaires pour les enfants des écoles primaires africaines) </h1>
      </div>
    </div>
    <div class="col-md-8">
        <!-- meta atribute -->
        <div class="post-atribute mb-4">
          <div class="mb-3 text-muted small">
            <!--author-->
                        <!--date-->
            <time class="ml-0 ml-sm-2 ml-md-3" datetime="2022-12-11 23:21:14">
              <span class="fa fa-clock"></span> 2022-12-11 23:21:14
            </time>
            <!--comments-->
            <span class="ml-2 ml-md-3" title="5 comments">
              <a class="text-muted" href="#comments"><span class="fa fa-comments"></span>5 Comments </a>
            </span>
          </div>
        </div>
        <!-- post content -->
        <div class="post-content">
            
                                                                          Le Général Ben Hodges  ajoute  : « Les Russes doivent perdre [la guerre] ; sinon, ils réessaieront dans deux ou trois ans. ».
Si avec un ennemi aussi faible que les Taliban en Afghanistan, Ben Hodges n’a pas su appliquer ces analyses aux troupes qu’il commandait au point que son armée doit fuir le pays en Août 2021, sur quoi le général américain se base-t-il pour être aussi tranchant avec un ennemi plus coriace comme la Russie face à l’Ukraine ?
La surenchère de l’incantation arrive le 19 novembre 2022 sur la chaine de télévision britannique d’information continue Sky News, par la bouche du général de division ukrainien à la retraite et ancien vice-ministre de la défense,  Volodymyr Havrylov, qui prédit que l’Ukraine aura récupéré la Crimée à Noël 2022 et que la guerre sera terminée au printemps 2023.
Est-ce que Noël 2022 est loin ? Plus que 13 jours et nous verrons si les troupes ukrainiennes seront à Sébastopol. Moi, je dis qu’ils n’ont pas une chance sur un milliard d’y être.   <br>
                        <a data-toggle="modal" href="#login" > Lire le contenu  </a>
                                                        </div>
        <!-- footer post -->
                                    ....
                        
    </div>
    
    <!-- start right column -->
    <aside class="col-md-4 right-sidebar-lg">
      <!--sticky-->
      <div class="sticky">
        <!--Advertiser-->
        <!--end advertiser-->

        <!-- latest post -->
        <aside class="widget">
          <!--Block title-->
          <div class="block-title-4">
            <h4 class="h5 title-arrow">
              <span>A lire</span>
            </h4>
          </div>
          <!--post big start-->
          <div class="big-post">
            <article class="card card-full hover-a mb-4">
              <!--thumbnail-->
              <div class="ratio_360-202 image-wrapper">
                <a href="#">
                  <img class="img-fluid lazy" src="./assets/img/assets/lazy-empty.png" data-src="./img/12Dec2022104054318731657_1965522696971753_6171870696741213605_n.jpg" alt="Image description">
                </a>
              </div>
              <div class="card-body">
                <!--title-->
                <h2 class="card-title h1-sm h3-md">
                                            <a href="index.php?p=articles&artid=1144">972- le rinvindaf des collèges et lycées camerounais en action - visite à bafang des élèves du club entreprenariat...</a>
                                    </h2>
                <!-- author & date -->
                <div class="card-text mb-2 text-muted small">
                                    <time datetime="2022-12-12 10:40:54">2022-12-12 10:40:54</time>
                </div>
                <!--description-->
                                    <p class="card-text"> Dimanche le 11 décembre 2022, la Pougala Academy de Bafang a reçu sur ses différents sites de production agro-industrielle, les... </p>
                              </div>
            </article>
          </div>
          <!--end post big-->
          <!--post small start-->
          <div class="small-post">
              
            <!--post list-->
                        <article class="card card-full hover-a mb-4">
              <div class="row">
                <!--thumbnail-->
                <div class="col-3 col-md-4 pr-2 pr-md-0">
                  <div class="ratio_110-77 image-wrapper">
                    <a href="#">
                      <img class="img-fluid lazy" src="./assets/img/assets/lazy-empty.png" data-src="./img/15Dec2022135759320189592_858006388654065_1174666494642267991_n.jpg" alt="Image description">
                    </a>
                  </div>
                </div>
                <!-- title & date -->
                <div class="col-9 col-md-8">
                  <div class="card-body pt-0">
                    <h3 class="card-title h6 h5-sm h6-md">
                                                    <a href="index.php?p=articles&artid=1150">975- La Russie n&#039;a besoin de faire auc...</a>
                                            </h3>
                    <div class="card-text small text-muted">
                      <time datetime="2022-12-15 13:57:59">2022-12-15 13:57:59</time>
                    </div>
                  </div>
                </div>
              </div>
            </article>
                        <article class="card card-full hover-a mb-4">
              <div class="row">
                <!--thumbnail-->
                <div class="col-3 col-md-4 pr-2 pr-md-0">
                  <div class="ratio_110-77 image-wrapper">
                    <a href="#">
                      <img class="img-fluid lazy" src="./assets/img/assets/lazy-empty.png" data-src="./img/12Dec2022150111maxresdefault.jpg" alt="Image description">
                    </a>
                  </div>
                </div>
                <!-- title & date -->
                <div class="col-9 col-md-8">
                  <div class="card-body pt-0">
                    <h3 class="card-title h6 h5-sm h6-md">
                                                    <a href="index.php?p=articles&artid=1145">973- Il y a 10 ans... j&#039;écrivais : L&#039;E...</a>
                                            </h3>
                    <div class="card-text small text-muted">
                      <time datetime="2022-12-12 15:01:11">2022-12-12 15:01:11</time>
                    </div>
                  </div>
                </div>
              </div>
            </article>
                        <article class="card card-full hover-a mb-4">
              <div class="row">
                <!--thumbnail-->
                <div class="col-3 col-md-4 pr-2 pr-md-0">
                  <div class="ratio_110-77 image-wrapper">
                    <a href="#">
                      <img class="img-fluid lazy" src="./assets/img/assets/lazy-empty.png" data-src="./img/02Dec2022091748DbeXXGBWsAAcUzk.jpeg" alt="Image description">
                    </a>
                  </div>
                </div>
                <!-- title & date -->
                <div class="col-9 col-md-8">
                  <div class="card-body pt-0">
                    <h3 class="card-title h6 h5-sm h6-md">
                                                    <a href="index.php?p=articles&artid=1133">962- &quot;Et si Mandela avait fait le mort...</a>
                                            </h3>
                    <div class="card-text small text-muted">
                      <time datetime="2022-12-02 09:17:48">2022-12-02 09:17:48</time>
                    </div>
                  </div>
                </div>
              </div>
            </article>
                        <article class="card card-full hover-a mb-4">
              <div class="row">
                <!--thumbnail-->
                <div class="col-3 col-md-4 pr-2 pr-md-0">
                  <div class="ratio_110-77 image-wrapper">
                    <a href="#">
                      <img class="img-fluid lazy" src="./assets/img/assets/lazy-empty.png" data-src="./img/27Nov2022183127316805925_1953612094829480_5210167553582878807_n.jpg" alt="Image description">
                    </a>
                  </div>
                </div>
                <!-- title & date -->
                <div class="col-9 col-md-8">
                  <div class="card-body pt-0">
                    <h3 class="card-title h6 h5-sm h6-md">
                                                    <a href="index.php?p=articles&artid=1127">956- Je t’informe que Dieu lui-même n’...</a>
                                            </h3>
                    <div class="card-text small text-muted">
                      <time datetime="2022-11-27 18:31:27">2022-11-27 18:31:27</time>
                    </div>
                  </div>
                </div>
              </div>
            </article>
                        <article class="card card-full hover-a mb-4">
              <div class="row">
                <!--thumbnail-->
                <div class="col-3 col-md-4 pr-2 pr-md-0">
                  <div class="ratio_110-77 image-wrapper">
                    <a href="#">
                      <img class="img-fluid lazy" src="./assets/img/assets/lazy-empty.png" data-src="./img/25Nov2022152006geostra.jpg" alt="Image description">
                    </a>
                  </div>
                </div>
                <!-- title & date -->
                <div class="col-9 col-md-8">
                  <div class="card-body pt-0">
                    <h3 class="card-title h6 h5-sm h6-md">
                                                    <a href="index.php?p=articles&artid=1120">950- Est-ce que Dieu comprend ou parle...</a>
                                            </h3>
                    <div class="card-text small text-muted">
                      <time datetime="2022-11-25 15:20:06">2022-11-25 15:20:06</time>
                    </div>
                  </div>
                </div>
              </div>
            </article>
                        <!--End post list-->
          </div>
          <!--end post small-->
          <div class="gap-0"></div>
        </aside>
        <!-- end latest post -->
      </div>
      <!--End sticky-->
    </aside>
    <!-- end right column -->
              
    <div class="modal fade" id="viewcmtdetails" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
            <div class="modal-body" >
                <form action="admin.php?p=articles" method="POST">
                  <input type="hidden" value="" name="cmtid" id="cmtid">
                  <div class="form-line">
                      <textarea rows="1" class="form-control no-resize" placeholder="Saisir une reponse" name="reponse" id="reponse" required></textarea>
                  </div>
                  <button type="button" class="btn btn-primary"  onclick="sendreply();">Repondre</button>
                </form>
                <hr>
                <div id="rply" style="overflow:scroll; height:400px;"></div>

            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
    </div>
    
    
        </div>
      </div>
    </main>
    <!--End Content-->

    <!--Footer start-->
    <footer>
      <!--Footer content-->
      <div id="footer" class="footer-dark bg-dark bg-footer py-5 px-3">
        <div class="container">
          <div class="row">
            <!-- left widget -->
            <div class="widget col-md-4">
              <h3 class="h5 widget-title border-bottom border-smooth">Contactez-nous</h3>
              <div class="widget-content">
                <address><i class="fa fa-map-marker-alt"></i> Boyom Editions - 28 Rue de Mimont - 06400 Cannes (FR)
                </address>
                <p class="footer-info"><i class="fa fa-phone"></i> 0033 (0)6 06 49 60 58</p>
                <p class="footer-info"><i class="fa fa-envelope"></i> boyom5@gmail.com</p>
                <p></p>
                <div class="social mb-4">
                  <!--facebook-->
                  <span class="my-2 mr-3">
                    <a target="_blank" href="https://www.facebook.com/Geostrategieafricaine" title="Facebook"><i class="fab fa-facebook fa-2x"></i></a>
                  </span>
                  
                  <span class="my-2 mr-3">
                    <a target="_blank" href="https://instagram.com/iegeducation?igshid=808ja6o7n7iz" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                  </span>
                  <!--end instagram-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End footer content-->
      <!-- footer copyright menu -->
      <div class="footer-copyright bg-secondary">
        <div class="container">
          <!--Navbar-->
          <nav class="navbar navbar-expand navbar-dark px-0">
            <!--footer left menu-->
            <ul class="navbar-nav footer-nav text-center first-left-lg-0">
                <li class="d-inline navbar-text">Copyright &copy; Pougala Academy - All rights reserved.</li>
            </ul>
            <!--end footer left menu-->
            <!-- footer copyright -->
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item"> <a class="nav-link" href="https://keurnam.com/" target="_blank">By KEURNAM</a></li>
            </ul>
            <!-- end footer copyright -->
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
      <!--end copyright menu-->
    </footer>
    <!-- End Footer -->
  </div>
  <!-- ========== END WRAPPER ========== -->
  <!--Back to top-->
  <a class="material-scrolltop back-top btn btn-light border position-fixed r-1 b-1" href="#"><i class="fa fa-arrow-up"></i></a>

        <!-- Modal -->
        <div class="modal fade" id="login" role="dialog" >
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                
                 
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                  <form id="conForm" method="POST" action="index.php?p=articles&artid=1143">
                        <p>Se connecter</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <input class="form-control" type="email" placeholder="Votre adresse e-mail" name="conEmail" value="" required>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <input class="form-control" type="password" placeholder="Votre mot de passe" name="conPass" value="" id="passcon" required>
                                </div>
                                <i><u style="color: #4285f4; font-size: 0.75em;"> <p id="voirpass" onclick="voirpasscon();" style="color: #4285f4"> Afficher<p></u></i>
                                    
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <button type="submit" name="connexion" class="btn btn-primary">Connexion</button>
                                </div>
                                                                
                                                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <p>Je n'ai pas de compte: <a href="#" onclick="afficheInscription();">Je m'inscris</a></p>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <p><a href="#" onclick="afficheReinitpass();" >Mot de passe oublié</a></p>
                                </div>
                                                                                            </div>
                        </div>
                    </form>

                  <form id="inscForm" style="display: none" method="POST" action="index.php?p=articles&artid=1143">
                        <p>S'inscrire</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 d-flex p-1 justify-content-center form-group">
                                    <b>Informations personnelles</b>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                  <input class="form-control" type="text" placeholder="Votre nom" name="insNom" required>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center" >
                                                                        <select class="form-control" name="insCountry" id="insCountry" required>
                                        <option value="" selected disabled>Choisir votre pays</option>
                                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                                    <option value="Afrique du Sud">Afrique du Sud</option>
                                                                                    <option value="Îles Åland">Îles Åland</option>
                                                                                    <option value="Albanie">Albanie</option>
                                                                                    <option value="Algérie">Algérie</option>
                                                                                    <option value="Allemagne">Allemagne</option>
                                                                                    <option value="Andorre">Andorre</option>
                                                                                    <option value="Angola">Angola</option>
                                                                                    <option value="Anguilla">Anguilla</option>
                                                                                    <option value="Antarctique">Antarctique</option>
                                                                                    <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                                                                                    <option value="Arabie saoudite">Arabie saoudite</option>
                                                                                    <option value="Argentine">Argentine</option>
                                                                                    <option value="Arménie">Arménie</option>
                                                                                    <option value="Aruba">Aruba</option>
                                                                                    <option value="Australie">Australie</option>
                                                                                    <option value="Autriche">Autriche</option>
                                                                                    <option value="Azerbaïdjan">Azerbaïdjan</option>
                                                                                    <option value="Bahamas">Bahamas</option>
                                                                                    <option value="Bahreïn">Bahreïn</option>
                                                                                    <option value="Bangladesh">Bangladesh</option>
                                                                                    <option value="Barbade">Barbade</option>
                                                                                    <option value="Biélorussie">Biélorussie</option>
                                                                                    <option value="Belgique">Belgique</option>
                                                                                    <option value="Belize">Belize</option>
                                                                                    <option value="Bénin">Bénin</option>
                                                                                    <option value="Bermudes">Bermudes</option>
                                                                                    <option value="Bhoutan">Bhoutan</option>
                                                                                    <option value="Bolivie">Bolivie</option>
                                                                                    <option value="Pays-Bas caribéens">Pays-Bas caribéens</option>
                                                                                    <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                                                                    <option value="Botswana">Botswana</option>
                                                                                    <option value="Île Bouvet">Île Bouvet</option>
                                                                                    <option value="Brésil">Brésil</option>
                                                                                    <option value="Brunei">Brunei</option>
                                                                                    <option value="Bulgarie">Bulgarie</option>
                                                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                                                    <option value="Burundi">Burundi</option>
                                                                                    <option value="Îles Caïmans">Îles Caïmans</option>
                                                                                    <option value="Cambodge">Cambodge</option>
                                                                                    <option value="Cameroun">Cameroun</option>
                                                                                    <option value="Canada">Canada</option>
                                                                                    <option value="Cap-Vert">Cap-Vert</option>
                                                                                    <option value="République centrafricaine">République centrafricaine</option>
                                                                                    <option value="Chili">Chili</option>
                                                                                    <option value="Chine">Chine</option>
                                                                                    <option value="Île Christmas">Île Christmas</option>
                                                                                    <option value="Chypre (pays)">Chypre (pays)</option>
                                                                                    <option value="Îles Cocos">Îles Cocos</option>
                                                                                    <option value="Colombie">Colombie</option>
                                                                                    <option value="Comores (pays)">Comores (pays)</option>
                                                                                    <option value="République du Congo">République du Congo</option>
                                                                                    <option value="République démocratique du Congo">République démocratique du Congo</option>
                                                                                    <option value="Îles Cook">Îles Cook</option>
                                                                                    <option value="Corée du Sud">Corée du Sud</option>
                                                                                    <option value="Corée du Nord">Corée du Nord</option>
                                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                                    <option value="Côte d&#039;Ivoire">Côte d&#039;Ivoire</option>
                                                                                    <option value="Croatie">Croatie</option>
                                                                                    <option value="Cuba">Cuba</option>
                                                                                    <option value="Curaçao">Curaçao</option>
                                                                                    <option value="Danemark">Danemark</option>
                                                                                    <option value="Djibouti">Djibouti</option>
                                                                                    <option value="République dominicaine">République dominicaine</option>
                                                                                    <option value="Dominique">Dominique</option>
                                                                                    <option value="Égypte">Égypte</option>
                                                                                    <option value="Salvador">Salvador</option>
                                                                                    <option value="Émirats arabes unis">Émirats arabes unis</option>
                                                                                    <option value="Équateur (pays)">Équateur (pays)</option>
                                                                                    <option value="Érythrée">Érythrée</option>
                                                                                    <option value="Espagne">Espagne</option>
                                                                                    <option value="Estonie">Estonie</option>
                                                                                    <option value="États-Unis">États-Unis</option>
                                                                                    <option value="Éthiopie">Éthiopie</option>
                                                                                    <option value="Malouines">Malouines</option>
                                                                                    <option value="Îles Féroé">Îles Féroé</option>
                                                                                    <option value="Fidji">Fidji</option>
                                                                                    <option value="Finlande">Finlande</option>
                                                                                    <option value="France">France</option>
                                                                                    <option value="Gabon">Gabon</option>
                                                                                    <option value="Gambie">Gambie</option>
                                                                                    <option value="Géorgie (pays)">Géorgie (pays)</option>
                                                                                    <option value="Géorgie du Sud-et-les îles Sandwich du Sud">Géorgie du Sud-et-les îles Sandwich du Sud</option>
                                                                                    <option value="Ghana">Ghana</option>
                                                                                    <option value="Gibraltar">Gibraltar</option>
                                                                                    <option value="Grèce">Grèce</option>
                                                                                    <option value="Grenade (pays)">Grenade (pays)</option>
                                                                                    <option value="Groenland">Groenland</option>
                                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                                    <option value="Guam">Guam</option>
                                                                                    <option value="Guatemala">Guatemala</option>
                                                                                    <option value="Guernesey">Guernesey</option>
                                                                                    <option value="Guinée">Guinée</option>
                                                                                    <option value="Guinée-Bissau">Guinée-Bissau</option>
                                                                                    <option value="Guinée équatoriale">Guinée équatoriale</option>
                                                                                    <option value="Guyana">Guyana</option>
                                                                                    <option value="Guyane">Guyane</option>
                                                                                    <option value="Haïti">Haïti</option>
                                                                                    <option value="Îles Heard-et-MacDonald">Îles Heard-et-MacDonald</option>
                                                                                    <option value="Honduras">Honduras</option>
                                                                                    <option value="Hong Kong">Hong Kong</option>
                                                                                    <option value="Hongrie">Hongrie</option>
                                                                                    <option value="Île de Man">Île de Man</option>
                                                                                    <option value="Îles mineures éloignées des États-Unis">Îles mineures éloignées des États-Unis</option>
                                                                                    <option value="Îles Vierges britanniques">Îles Vierges britanniques</option>
                                                                                    <option value="Îles Vierges des États-Unis">Îles Vierges des États-Unis</option>
                                                                                    <option value="Inde">Inde</option>
                                                                                    <option value="Indonésie">Indonésie</option>
                                                                                    <option value="Iran">Iran</option>
                                                                                    <option value="Irak">Irak</option>
                                                                                    <option value="Irlande (pays)">Irlande (pays)</option>
                                                                                    <option value="Islande">Islande</option>
                                                                                    <option value="Israël">Israël</option>
                                                                                    <option value="Italie">Italie</option>
                                                                                    <option value="Jamaïque">Jamaïque</option>
                                                                                    <option value="Japon">Japon</option>
                                                                                    <option value="Jersey">Jersey</option>
                                                                                    <option value="Jordanie">Jordanie</option>
                                                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                                                    <option value="Kenya">Kenya</option>
                                                                                    <option value="Kirghizistan">Kirghizistan</option>
                                                                                    <option value="Kiribati">Kiribati</option>
                                                                                    <option value="Koweït">Koweït</option>
                                                                                    <option value="Laos">Laos</option>
                                                                                    <option value="Lesotho">Lesotho</option>
                                                                                    <option value="Lettonie">Lettonie</option>
                                                                                    <option value="Liban">Liban</option>
                                                                                    <option value="Liberia">Liberia</option>
                                                                                    <option value="Libye">Libye</option>
                                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                                    <option value="Lituanie">Lituanie</option>
                                                                                    <option value="Luxembourg (pays)">Luxembourg (pays)</option>
                                                                                    <option value="Macao">Macao</option>
                                                                                    <option value="Macédoine du Nord">Macédoine du Nord</option>
                                                                                    <option value="Madagascar">Madagascar</option>
                                                                                    <option value="Malaisie">Malaisie</option>
                                                                                    <option value="Malawi">Malawi</option>
                                                                                    <option value="Maldives">Maldives</option>
                                                                                    <option value="Mali">Mali</option>
                                                                                    <option value="Malte">Malte</option>
                                                                                    <option value="Îles Mariannes du Nord">Îles Mariannes du Nord</option>
                                                                                    <option value="Maroc">Maroc</option>
                                                                                    <option value="Îles Marshall (pays)">Îles Marshall (pays)</option>
                                                                                    <option value="Martinique">Martinique</option>
                                                                                    <option value="Maurice (pays)">Maurice (pays)</option>
                                                                                    <option value="Mauritanie">Mauritanie</option>
                                                                                    <option value="Mayotte">Mayotte</option>
                                                                                    <option value="Mexique">Mexique</option>
                                                                                    <option value="États fédérés de Micronésie (pays)">États fédérés de Micronésie (pays)</option>
                                                                                    <option value="Moldavie">Moldavie</option>
                                                                                    <option value="Monaco">Monaco</option>
                                                                                    <option value="Mongolie">Mongolie</option>
                                                                                    <option value="Monténégro">Monténégro</option>
                                                                                    <option value="Montserrat">Montserrat</option>
                                                                                    <option value="Mozambique">Mozambique</option>
                                                                                    <option value="Birmanie">Birmanie</option>
                                                                                    <option value="Namibie">Namibie</option>
                                                                                    <option value="Nauru">Nauru</option>
                                                                                    <option value="Népal">Népal</option>
                                                                                    <option value="Nicaragua">Nicaragua</option>
                                                                                    <option value="Niger">Niger</option>
                                                                                    <option value="Nigeria">Nigeria</option>
                                                                                    <option value="Niue">Niue</option>
                                                                                    <option value="Île Norfolk">Île Norfolk</option>
                                                                                    <option value="Norvège">Norvège</option>
                                                                                    <option value="Nouvelle-Calédonie">Nouvelle-Calédonie</option>
                                                                                    <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                                                                                    <option value="Territoire britannique de l&#039;océan Indien">Territoire britannique de l&#039;océan Indien</option>
                                                                                    <option value="Oman">Oman</option>
                                                                                    <option value="Ouganda">Ouganda</option>
                                                                                    <option value="Ouzbékistan">Ouzbékistan</option>
                                                                                    <option value="Pakistan">Pakistan</option>
                                                                                    <option value="Palaos">Palaos</option>
                                                                                    <option value="Palestine">Palestine</option>
                                                                                    <option value="Panama">Panama</option>
                                                                                    <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
                                                                                    <option value="Paraguay">Paraguay</option>
                                                                                    <option value="Pays-Bas">Pays-Bas</option>
                                                                                    <option value="Pérou">Pérou</option>
                                                                                    <option value="Philippines">Philippines</option>
                                                                                    <option value="Îles Pitcairn">Îles Pitcairn</option>
                                                                                    <option value="Pologne">Pologne</option>
                                                                                    <option value="Polynésie française">Polynésie française</option>
                                                                                    <option value="Porto Rico">Porto Rico</option>
                                                                                    <option value="Portugal">Portugal</option>
                                                                                    <option value="Qatar">Qatar</option>
                                                                                    <option value="La Réunion">La Réunion</option>
                                                                                    <option value="Roumanie">Roumanie</option>
                                                                                    <option value="Royaume-Uni">Royaume-Uni</option>
                                                                                    <option value="Russie">Russie</option>
                                                                                    <option value="Rwanda">Rwanda</option>
                                                                                    <option value="République arabe sahraouie démocratique">République arabe sahraouie démocratique</option>
                                                                                    <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                                                                                    <option value="Saint-Christophe-et-Niévès">Saint-Christophe-et-Niévès</option>
                                                                                    <option value="Saint-Marin">Saint-Marin</option>
                                                                                    <option value="Saint-Martin">Saint-Martin</option>
                                                                                    <option value="Saint-Martin">Saint-Martin</option>
                                                                                    <option value="Saint-Pierre-et-Miquelon">Saint-Pierre-et-Miquelon</option>
                                                                                    <option value="Saint-Siège (État de la Cité du Vatican)">Saint-Siège (État de la Cité du Vatican)</option>
                                                                                    <option value="Saint-Vincent-et-les-Grenadines">Saint-Vincent-et-les-Grenadines</option>
                                                                                    <option value="Sainte-Hélène, Ascension et Tristan da Cunha">Sainte-Hélène, Ascension et Tristan da Cunha</option>
                                                                                    <option value="Sainte-Lucie">Sainte-Lucie</option>
                                                                                    <option value="Salomon">Salomon</option>
                                                                                    <option value="Samoa">Samoa</option>
                                                                                    <option value="Samoa américaines">Samoa américaines</option>
                                                                                    <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
                                                                                    <option value="Sénégal">Sénégal</option>
                                                                                    <option value="Serbie">Serbie</option>
                                                                                    <option value="Seychelles">Seychelles</option>
                                                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                                                    <option value="Singapour">Singapour</option>
                                                                                    <option value="Slovaquie">Slovaquie</option>
                                                                                    <option value="Slovénie">Slovénie</option>
                                                                                    <option value="Somalie">Somalie</option>
                                                                                    <option value="Soudan">Soudan</option>
                                                                                    <option value="Soudan du Sud">Soudan du Sud</option>
                                                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                                                    <option value="Suède">Suède</option>
                                                                                    <option value="Suisse">Suisse</option>
                                                                                    <option value="Suriname">Suriname</option>
                                                                                    <option value="Svalbard et ile Jan Mayen">Svalbard et ile Jan Mayen</option>
                                                                                    <option value="Eswatini">Eswatini</option>
                                                                                    <option value="Syrie">Syrie</option>
                                                                                    <option value="Tadjikistan">Tadjikistan</option>
                                                                                    <option value="Taïwan / (République de Chine (Taïwan))">Taïwan / (République de Chine (Taïwan))</option>
                                                                                    <option value="Tanzanie">Tanzanie</option>
                                                                                    <option value="Tchad">Tchad</option>
                                                                                    <option value="Tchéquie">Tchéquie</option>
                                                                                    <option value="Terres australes et antarctiques françaises">Terres australes et antarctiques françaises</option>
                                                                                    <option value="Thaïlande">Thaïlande</option>
                                                                                    <option value="Timor oriental">Timor oriental</option>
                                                                                    <option value="Togo">Togo</option>
                                                                                    <option value="Tokelau">Tokelau</option>
                                                                                    <option value="Tonga">Tonga</option>
                                                                                    <option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
                                                                                    <option value="Tunisie">Tunisie</option>
                                                                                    <option value="Turkménistan">Turkménistan</option>
                                                                                    <option value="Îles Turques-et-Caïques">Îles Turques-et-Caïques</option>
                                                                                    <option value="Turquie">Turquie</option>
                                                                                    <option value="Tuvalu">Tuvalu</option>
                                                                                    <option value="Ukraine">Ukraine</option>
                                                                                    <option value="Uruguay">Uruguay</option>
                                                                                    <option value="Vanuatu">Vanuatu</option>
                                                                                    <option value="Venezuela">Venezuela</option>
                                                                                    <option value="Viêt Nam">Viêt Nam</option>
                                                                                    <option value="Wallis-et-Futuna">Wallis-et-Futuna</option>
                                                                                    <option value="Yémen">Yémen</option>
                                                                                    <option value="Zambie">Zambie</option>
                                                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                                                
                                    </select>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                  <input class="form-control" type="text" placeholder="Numero de téléphone" name="insTel" required>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                  <input class="form-control" type="email" placeholder="Votre adresse e-mail" name="insEmail" required>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                  <input class="form-control" type="password" placeholder="Votre mot de passe" name="insPass" id="passins" required>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <input class="form-control" type="password" placeholder="Confirmer votre mot de passe" id="passins2" name="insPassCon" required>
                                </div>
                                <i><u style="color: #4285f4; font-size: 0.75em;"> <p id="voirpassins" onclick="voirpassins();" style="color: #4285f4"> Afficher<p></u></i>
                                <div class="col-md-12 d-flex p-1 justify-content-center form-group">
                                    <b>Formule d'abonnement</b>
                                </div>
                                                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Nombre de mois: </li>
                                        <li class="list-group-item">
                                            <select class="form-control" id="sel2" name="nbmois" required>
                                              <option value="1">1 mois (8,5 &euro;)</option>
                                              <option value="3">3 mois (25,50 &euro;)</option>
                                              <option value="6">6 mois (51 &euro;)</option>
                                              <option value="12">12 mois (93,50 &euro;)</option>
                                              <option value="14">12 mois (<b>GOLD</b>) (307 &euro;)</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Choisir votre moyen de paiement </li>
                                        <li class="list-group-item">Paypal <span class="badge "><input type="radio" name="typepay" value="paypal" checked></span></li>
                                        <li class="list-group-item">Mobile money <span class="badge "><input type="radio" name="typepay" value="mobile" ></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Choisir le pays (Mobile money): </li>
                                        <li class="list-group-item">
                                            <select class="form-control" id="paysmm" name="paysmm" required>
                                              <option value="CM">Cameroun</option>
                                              <option value="CI">Côte d'ivoire</option>
                                              <option value="BF">Burkina Faso</option>
                                              <option value="ML">Mali</option>
                                              <option value="SN">Sénégal</option>
                                              <option value="TG">Togo</option>
                                              <option value="RDC">RD Congo</option>
                                                                                          </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <button type="submit" name="inscription" class="btn btn-primary">S'inscrire</button>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <a href="#" onclick="afficheConnexion();">Se Connecter</a>
                                </div>
                                                                                            </div>
                        </div>
                    </form>
                            
                    <form id="reinitForm" style="display: none" method="POST" action="index.php?p=articles&artid=1143">
                      <h4 style="text-align: center" class="modal-title">Réinitialiser votre mot de passe</h4>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <input class="form-control" type="email" placeholder="Votre adresse e-mail" name="initEmail" required>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <input class="form-control" type="text" placeholder="Votre numero de téléphone" name="initTel" required>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <button type="submit" name="reinitpass" class="btn btn-primary">Soumettre ma requête</button>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <p><a href="#" onclick="afficheConnexion();" >Retour</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
              </div>
            </div>

          </div>
        </div>
        <!-- Modal -->
        
        <!-- Modal -->
        <div class="modal fade" id="abonement_nb_mois" role="dialog" >
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                  
                 
                
              </div>
              <div class="modal-body">  
                  <form id="abnForm" method="POST" action="index.php?p=articles&artid=1143">
                      <h4 style="text-align: center" class="modal-title">Mettre a jour votre abonnment</h4>
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Nombre de mois: </li>
                                        <li class="list-group-item">
                                            <select class="form-control" id="sel1" name="nbmois" required>
                                              <option value="1">1 mois (8,5 &euro;)</option>
                                              <option value="3">3 mois (25,50 &euro;)</option>
                                              <option value="6">6 mois (51 &euro;)</option>
                                              <option value="12">12 mois (93,50 &euro;)</option>
                                              <option value="14">12 mois (<b>GOLD</b>) (307 &euro;)</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Choisir votre moyen de paiement </li>
                                        <li class="list-group-item">Paypal <span class="badge "><input type="radio" name="typepay" value="paypal" checked></span></li>
                                        <li class="list-group-item">Mobile money <span class="badge "><input type="radio" name="typepay" value="mobile" ></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Choisir le pays (Mobile money): </li>
                                        <li class="list-group-item">
                                            <select class="form-control" id="paysmm" name="paysmm" required>
                                              <option value="CM">Cameroun</option>
                                              <option value="CI">Côte d'ivoire</option>
                                              <option value="BF">Burkina Faso</option>
                                              <option value="ML">Mali</option>
                                              <option value="SN">Sénégal</option>
                                              <option value="TG">Togo</option>
                                              <option value="RDC">RD Congo</option>
                                              <option value="BE">Bénin</option>
                                              <option value="NE">Niger</option>
                                                                                          </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <button type="submit" name="validermois" class="btn btn-primary">Valider</button>
                                </div>
                            </div>
                        </div>
                    </form>
              </div>
            </div>

          </div>
        </div>
        <!-- Modal -->
        
        <!-- Modal: reeabonnement payment -->
                <!-- Modal -->
        
        <!-- Modal: Abonnement payment  -->
                <!-- Modal -->
        
        <!-- Modal news letter-->
        <div class="modal fade" id="abn_success" role="dialog" data-backdrop="static">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                              </div>
              <div class="modal-body">  
                  <h4> Opération effectué avec success </h4>
                  
                                    
                                    
                  
                  <div class="col-md-12 d-flex p-1 justify-content-center">
                    <a href="index.php?p=articles&artid=1143"  class="btn">Continuer</a>
                  </div>             
              </div>
            </div>

          </div>
        </div>
        <!-- Modal -->
        
    <!-- Modal news letter-->
    <div class="modal fade" id="newslettermsg" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">  
              <h4><h4>
          </div>
        </div>

      </div>
    </div>
    <!-- Modal -->
    
    
    <!-- Modal news letter-->
    <div class="modal fade" id="flash_cheker" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
            <div class="modal-body">  
              <form method="POST" action="index.php?p=articles&artid=1143">
                <h4 style="text-align: center" class="modal-title">Utiliser un code flash</h4>
                  <div class="container">
                      <div class="row">

                          <div class="col-md-12  form-group">
                              <ul class="list-group">
                                  <li class="list-group-item"> Saisir votre code flash: </li>
                                  <li class="list-group-item">
                                      <div class="col-md-12 d-flex p-1 justify-content-center">
                                          <input class="form-control" value="" type="text" placeholder="Entrer le code flash" name="flash_to_check" required>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                          <div class="col-md-12 d-flex p-1 justify-content-center">
                              <button type="submit" name="check_flash" class="btn btn-primary">Valider</button>
                          </div>
                      </div>
                  </div>
              </form>
            </div>
        </div>

      </div>
    </div>
    <!-- Modal -->
        
    
    <!-- Modal news letter-->
    <div class="modal fade" id="search_modal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">  
              <!-- block start -->
            <div class="block-area">
              <!-- block title -->
              <div class="block-title-12 col-md-12">
                  <input type="text" class="form-control " placeholder="Rechercher..." aria-label="search" onchange="rechercherArticle(this)"  onkeyup="this.onchange();" onpaste="this.onchange();" 
                                   oninput="this.onchange();">
              </div>
              <!-- block content -->
              <div class="border-bottom-last-0 first-pt-0" id="rsltrechercher" style="font-size: 0.75em;">
                
              </div>
              <!-- end block content -->
            </div>
            <!--end block-->
          </div>
        </div>

      </div>
    </div>
    <!-- Modal -->
    
    
    
    <!-- Modal flash -->
        <div class="modal fade" id="suscribe_to_flash" role="dialog" >
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                  
                 
                
              </div>
              <div class="modal-body">  
                  <form id="abnForm" method="POST" action="index.php?p=articles&artid=1143">
                      <h4 style="text-align: center" class="modal-title">Acheter un flash de lecture</h4>
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Informations </li>
                                        <li class="list-group-item">
                                            <select class="form-control" id="sel1" name="flash" required>
                                              <option value="20">24h de lecture (2 &euro;)</option>
                                            </select>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="col-md-12 d-flex p-1 justify-content-center">
                                                <input class="form-control" type="email" placeholder="Votre adresse e-mail" name="flash_email" value="" required>
                                            </div>
                                        </li>
                                        <input type="hidden" name="flash_article" value="1143" required>
                                    </ul>
                                </div>
                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Choisir votre moyen de paiement </li>
                                        <li class="list-group-item">Paypal <span class="badge "><input type="radio" name="typepay" value="paypal" checked></span></li>
                                        <li class="list-group-item">Mobile money <span class="badge "><input type="radio" name="typepay" value="mobile" ></span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12  form-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"> Choisir le pays (Mobile money): </li>
                                        <li class="list-group-item">
                                            <select class="form-control" id="paysmm" name="paysmm" required>
                                              <option value="CM">Cameroun</option>
                                              <option value="CI">Côte d'ivoire</option>
                                              <option value="BF">Burkina Faso</option>
                                              <option value="ML">Mali</option>
                                              <option value="SN">Sénégal</option>
                                              <option value="TG">Togo</option>
                                              <option value="RDC">RD Congo</option>
                                              <option value="BE">Bénin</option>
                                              <option value="NE">Niger</option>
                                                                                                                                        </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 d-flex p-1 justify-content-center">
                                    <button type="submit" name="validermois" class="btn btn-primary">Valider</button>
                                </div>
                            </div>
                        </div>
                    </form>
              </div>
            </div>

          </div>
        </div>
        <!-- Modal -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="./statics/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./statics/assets/vendor/popper.js/dist/popper.min.js"></script>
  <script src="./statics/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <!--Vendor js-->
  <script src="./statics/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
  <script src="./statics/assets/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="./statics/assets/vendor/vanilla-lazyload/dist/lazyload.min.js"></script>
  <script src="./statics/assets/vendor/smoothscroll-for-websites/SmoothScroll.js"></script>
  <!--Bootstrap Customizer js-->
  <script src="./statics/assets/vendor/bootstrap-customizer/js/bootstrap-customizer.js"></script>
  <!--Theme js-->
  <script src="./statics/assets/js/theme.js"></script>
  
  
  <script>
        function voirpasscon() {
          let inp = document.getElementById("passcon");
          let para = document.getElementById("voirpass");
          if (inp.type === "password") {
            inp.type = "text";
            para.textContent = "Cacher";
          } else {
            inp.type = "password";
            para.textContent = "Afficher";
          }
        }
        
        function voirpassins() {
          let inp = document.getElementById("passins");
          let inp2 = document.getElementById("passins2");
          let para = document.getElementById("voirpassins");
          if (inp.type === "password") {
            inp.type = "text";
            inp2.type = "text";
            para.textContent = "Cacher";
          } else {
            inp.type = "password";
            inp2.type = "password";
            para.textContent = "Afficher";
          }
        }
        function rechercherArticle(elt){
            
            var searchpatten = elt.value;
            //alert(searchpatten);
            if(searchpatten.length > 6 ){
                
                //alert('tesr');
                $.post('recherche.php', {
                    text: searchpatten
                }, function(data, status) {
                    //alert(data);
                    var myObj = JSON.parse( data );
                    if( myObj.length === 0 ){
                        document.getElementById('rsltrechercher').innerHTML = "<p>Aucun resultat...</p>";
                    }else{
                        //alert(myObj.length);
                        var rslt = "";
                        for (var i = 0; i < myObj.length; i++){
                            var elmt = '<article class="card card-full hover-a py-4">'+ 
                                            '<div class="row">'+
                                              '<div class="col-sm-12 col-md-12 col-lg-12">'+
                                                '<div class="card-body pt-3 pt-sm-0 pt-md-3 pt-lg-0">'+
                                                  '<p class="card-title h2 h3-sm h2-md">'+
                                                    '<a href="index.php?p=articles&artid='+myObj[i].id+'">'+myObj[i].titre+'</a>'+
                                                  '</p>'+
                                                  '<div class="card-text mb-2 text-muted small">'+
                                                    '<span class="d-none d-sm-inline mr-1">'+
                                                      '<a class="font-weight-bold" href="#">'+myObj[i].datescreation+'</a>'+ 
                                                    '</span>'+
                                                  '</div>'+
                                                  '<p class="card-text"></p>'+
                                                '</div>'+
                                              '</div>'+
                                            '</div>'+
                                          '</article>';
                            //var elmt = '<li><a href="index.php?p=articles&artid='+myObj[i].id+'">'+myObj[i].titre+'</a></li>';
                            rslt = rslt.concat(elmt);
                        }  
                        document.getElementById('rsltrechercher').innerHTML = rslt;
                    }
                });
            }else{
                document.getElementById('rsltrechercher').innerHTML = "<p>...</p>";
            }
        }
    </script>
    
      
                                        




        
    
    
    
        <script type="text/javascript">
        function afficheInscription() {
            document.getElementById("inscForm").style.display = "block";
            document.getElementById("conForm").style.display = "none";
            document.getElementById("reinitForm").style.display = "none";
        }

        function afficheConnexion() {
            document.getElementById("inscForm").style.display = "none";
            document.getElementById("conForm").style.display = "block";
            document.getElementById("reinitForm").style.display = "none";
        }

        function afficheReinitpass() {
            document.getElementById("inscForm").style.display = "none";
            document.getElementById("conForm").style.display = "none";
            document.getElementById("reinitForm").style.display = "block";
        }
    </script>

    <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
          document.getElementById("startchatbtn").style.display = "none";
        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
          document.getElementById("startchatbtn").style.display = "block";
        } 
    </script>
</body>

</html>
