<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Themesdesign">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Title -->
    <title>Start Bootstrap Theme</title>

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon-font -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" type="text/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>



<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70" onload="return preloader();">

    <div id="preloader">
        <div id="status">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky navbar-light" role="navigation" id="navbar">
        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand logo" href="index_1.php">
                <i class="mdi mdi-chart-bubble"></i>
                <span>A??roport</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- menu -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#home">accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#features">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#team">??quipe</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll class="nav-link" href="#faq">FAQ</a>
                    </li>


                </ul>
            </div>
            <!--/Menu -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->

    <!-- HOME -->
    <section class="home bg-img-1" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="home-wrapper">
                        <h1 class="text-uppercase">A??roport Paris</h1>
                        <p>Le site pratique de l'a??roport<br>
                        <a href="" class="btn btn-custom">suivre vos commandes</a>
                        <div class="clearfix"></div>
                        <a href="https://www.youtube.com/watch?v=S-MCrGRqlCw" class="video-btn btn shadow-none"  data-bs-target="#watchvideomodal"><i class="mdi mdi-play"></i>regardez la video</a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>
    <!-- END HOME -->

    <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
            <div class="modal-content hero-modal-0 bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <video id="VisaChipCardVideo" class="w-100" controls="">
                    <source src="https://www.youtube.com/watch?v=S-MCrGRqlCw" type="popup-video play-video">
                    <!--Browser does not support <video> tag -->
                </video>
            </div>
        </div>
    </div>

    <!-- FEATURES-1 -->
    <section class="section" id="features">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="text-uppercase font-bold">Nos nouveaut??s</h1>
                    <div class="title-hr"></div>
                </div><!-- end col -->
            </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="feature-detail">
                        <h2 class="title" data-wow-delay=".1s"><span class="active-text bg-custom">Le nouvel espace Chanel a de quoi s??duire</span></h2>
                        <p class="features-txt" data-wow-delay=".5s">S???offrir des lunettes de soleil griff??es et ses produits de beaut?? favoris dans une m??me boutique, juste avant d???embarquer, c'est possible !
                            Un ??lot central avec chaises hautes, grands miroirs et n??ons invite les clients ?? choisir un vernis ?? ongles, une r??f??rence pour le teint ou les yeux, face aux photos de la chanteuse belge Ang??le, l???une des ??g??ries de la maison de la rue Cambon.
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-5 offset-sm-1">
                    <div class="feature-1">
                        <img src="images/chanel boutique.jpg" class="img-fluid" alt="features-img">
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>
    <!-- END FEATURES-1 -->

    <!-- FEATURES-2 -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <div class="feature-1">
                        <img src="images/kylie boutique.jpg" class="img-fluid" alt="features-img">
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-6 offset-sm-1">
                    <div class="feature-detail">
                        <h2 class="title" data-wow-delay=".1s"><span class="active-text bg-custom">Kylie ouvre sa premi??re boutique en a??roport !</span></h2>
                        <p class="features-txt" data-wow-delay=".5s">La top am??ricaine Kylie Jenner a cr???? la surprise en lan??ant sa marque de cosm??tiques, Kylie.
                            Pour la premi??re fois dans un a??roport europ??en et fran??ais de surcro??t, les passagers peuvent d??couvrir ses produits aux formules respectueuses
                            de l???environnement dans des corners exclusifs et color??s, au sein des boutiques Buy Paris Duty Free.
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- END FEATURES-2 -->


    <!-- SERVICES -->
    <section class="section bg-gray" id="services">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="text-uppercase font-bold">Nos meilleurs services</h3>
                    <div class="title-hr"></div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-8">
                            <p class="sub-title">Merci pour votre lecture</p>
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">

                <div class="col-sm-6">
                    <div class="service-item">
                        <img src="images/espace-detente.jpg" alt="">
                        <div class="service-detail">
                            <h4>ESPACES D??TENTE </h4>
                            <p>Besoin de vous reposer ?
                                Profitez des espaces d??tente pour r??cup??rer !

                                Paris A??roport met ?? votre disposition gratuitement des espaces confortables pour s'installer en famille ou bien s'allonger et se reposer pendant une correspondance ou en attendant votre vol.
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->

                <div class="col-sm-6">
                    <div class="service-item">
                        <img src="images/playstation-ps4-sony.jpg" alt="">
                        <div class="service-detail">
                            <h4>Espaces jeux et gaming</h4>
                            <p>Vous avez du temps avant d'embarquer ?

                                Paris A??roport s???est associ?? ?? SONY pour mettre ?? votre disposition gratuitement des bornes proposant les derniers jeux PlayStation 4.
                                Venez vivre l'exp??rience PS4 dans les salles d???embarquement, disponibles ?? tout moment.
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->

            </div> <!--end row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="service-item">
                        <img src="images/t??l??chargement.jpg" alt="">
                        <div class="service-detail">
                            <h4>Services financiers</h4>
                            <p>Notre ??quipe ?? mis en place le moyen pour vous de pouvoir retirer de l'argent si n??cessaire sans frais suppl??mentaire et ceux pour tous le monde.
                        </div> <!-- /service-detail -->
                    </div> <!-- /service-item -->
                </div> <!-- /col -->


        </div> <!-- end container -->
    </section>
    <!-- END SERVICES -->


    <!-- CTA -->
    <section class="section bg-img-3 parallax section-cta" data-stellar-background-ratio="0.7">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1><p>R??servation de Vol</p></h1>
                    <a href="index.php" class="btn btn-custom">R??server maintenant</a>
                </div>
            </div>
        </div>
    </section>
    <!--END CTA -->


    <!-- TEAM -->
    <section class="section" id="team">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="text-uppercase font-bold">L'??quipe</h3>
                    <div class="title-hr"></div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-8">
                            <p class="sub-title"></p>
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row team text-center">

                        <!-- team-member -->
                        <div class="col-sm-4">
                            <div class="team-member">
                                <img src="images/team/team1.jpg" alt="team-member" class="img-fluid rounded-circle">
                                <h4>Candace Vance</h4>
                                <p>Co-Pilote</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- team-member -->
                        <div class="col-sm-4">
                            <div class="team-member">
                                <img src="images/team/team2.jpg" alt="team-member" class="img-fluid rounded-circle">
                                <h4>Mike Oxbigg</h4>
                                <p>Co-Pilote</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- team-member -->
                        <div class="col-sm-4">
                            <div class="team-member">
                                <img src="images/team/team3.jpg" alt="team-member" class="img-fluid rounded-circle">
                                <h4>Klein Graham</h4>
                                <p>Pilote</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- END TEAM -->


    <!-- Pricing -->
    <section class="section bg-gray" id="pricing">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="text-uppercase font-bold">Prix simple</h3>
                    <div class="title-hr"></div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-8">
                            <p class="sub-title"></p>
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <!-- Pricing Item -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-item-inner">
                            <div class="pricing-wrap">
                                <div class="pricing-topbar">
                                    <div class="pricing-title">
                                        Pack de d??part
                                    </div>

                                    <div class="pricing-num">
                                        <sup>???</sup>99
                                    </div>
                                    <div class="pr-per">
                                        par mois
                                    </div>
                                </div>
                                <!-- Pricing Features -->
                                <div class="pricing-features">
                                    <ul class="sf-list pr-list">
                                        <li><b>1</b> h??bergement</li>
                                        <li>Jusqu'?? <b>10</b> utilisateurs</li>
                                        <li><b>3</b> bases de donn??es</li>
                                        <li><b>Aides</b> gratuites</li>
                                    </ul>
                                </div>
                                
                                <!-- Button -->
                                <div class="pr-button">
                                    <a href="" class="btn btn-custom btn-rnd">Acheter maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Pricing Item -->

                <!-- Pricing Item -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="pricing-item best-value">
                        <div class="pricing-item-inner">
                            <div class="pricing-wrap">
                                <div class="pricing-topbar">
                                    <div class="pricing-title">
                                        Pack professionnel
                                    </div>

                                    <div class="pricing-num">
                                        <sup>???</sup>199
                                    </div>
                                    <div class="pr-per">
                                        par mois
                                    </div>
                                </div>
                                <!-- Pricing Features -->
                                <div class="pricing-features">
                                    <ul class="sf-list pr-list">
                                        <li><b>5</b> h??bergement</li>
                                        <li>Jusqu'?? <b>100</b> utilisateurs</li>
                                        <li><b>10</b> bases de donn??es</li>
                                        <li><b>Aides</b> gratuites</li>
                                    </ul>
                                </div>
                                
                                <!-- Button -->
                                <div class="pr-button">
                                    <a href="" class="btn btn-custom btn-rnd">acheter maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Pricing Item -->


                <!-- Pricing Item -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-item-inner">
                            <div class="pricing-wrap">
                                <div class="pricing-topbar">
                                    <div class="pricing-title">
                                        Pack Entreprise
                                    </div>

                                    <div class="pricing-num">
                                        <sup>???</sup>299
                                    </div>
                                    <div class="pr-per">
                                        par mois
                                    </div>
                                </div>
                                <!-- Pricing Features -->
                                <div class="pricing-features">
                                    <ul class="sf-list pr-list">
                                        <li><b>H??bergement</b> illimit??</li>
                                        <li>Jusqu'?? <b>1000</b> utilisateurs</li>
                                        <li><b>100</b> bases de donn??es</li>
                                        <li><b>Aides</b> gratuites</li>
                                    </ul>
                                </div>
                                
                                <!-- Button -->
                                <div class="pr-button">
                                    <a href="" class="btn btn-custom btn-rnd">acheter maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Pricing Item -->
                        
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- END PRICING -->


    <!-- TESTIMONIALS -->
    <section class="section bg-img-2 testimonials parallax" data-stellar-background-ratio="0.5">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div>
                        

                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>

        <!-- CLIENTS -->
        <div class="clients">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-12">



                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- END CLIENTS -->
    </section>

    <!--END TESTIMONIALS -->


    <!-- FAQ -->
    <section class="section" id="faq">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="text-uppercase font-bold zoomIn animated wow">FAQ</h3>
                    <div class="title-hr"></div>

                    <div class="row justify-content-center">
                        <div class="col-md-6  col-sm-8">
                            <p class="sub-title"><h2>Foires aux question</h2></p><br>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-md-6">
                    <!-- Question/Answer -->
                    <div>
                        <h4 class="question" data-wow-delay=".1s"><i class="mdi mdi-numeric-1-box text-secondary"></i>Comment savoir si mon vol a du retard ?
                        </h4>
                        <p class="answer">Mon Vol en Direct permet de recevoir une alerte par email pour toute confirmation ou modification d'un vol vers ou depuis l???a??roport (?? l'heure, retard, report, annulation, changement de terminal).</div>

                    <!-- Question/Answer -->
                    <div>
                        <h4 class="question"><i class="mdi mdi-numeric-3-box text-secondary"></i> Combien de temps avant dois-je me pr??senter ?? l'a??roport pour mon vol ?</h4>
                        <p class="answer">Pour un vol domestique ou moyen courrier (rayon d???action est de 5000 kilom??tres environ) : au moins 1h30 avant l???heure de d??part. Pour un vol international long-courrier au minimum 2 ?? 3 heures avant l???heure de d??part.</div>

                    <!-- Question/Answer -->
                    <div>
                        <h4 class="question"><i class="mdi mdi-numeric-5-box text-secondary"></i> Bagages en soute : quels sont le poids et les dimensions autoris??s ?? l'a??roport ?</h4>
                        <p class="answer">Votre bagage en soute peut mesurer en g??n??ral jusqu'?? 158 cm (a + b + c), poches, roues et poign??es comprises. Pour la plupart des compagnies a??rienne, le poids maximal de votre bagage autoris?? en soute est de 23 kilos (50lbs).</div>
                </div>
                <!--/col-md-5 -->

                <div class="col-md-6">
                    <!-- Question/Answer -->
                    <div class="animated fadeInRight wow" data-wow-delay=".2s">
                        <h4 class="question"><i class="mdi mdi-numeric-2-box text-secondary"></i> Bagages ?? main (en cabine) : quels sont le poids et les dimensions autoris??s ?? l???a??roport ?</h4>
                        <p class="answer">Selon la compagnie a??rienne avec laquelle vous voyagez, les bagages accept??s en cabine varient en nombre, en poids et en taille. G??n??ralement, 1 bagage cabine (8 kilos en moyenne) et 1 accessoire suppl??mentaire (type sac ?? main) en classe ??conomique et 2 bagages cabine et 1 accessoire suppl??mentaire en classe affaire.</div>

                    <!-- Question/Answer -->
                    <div class="animated fadeInRight wow" data-wow-delay=".4s">
                        <h4 class="question"><i class="mdi mdi-numeric-4-box text-secondary"></i> Quelles documents pour un enfant voyageant seul ?</h4>
                        <p class="answer">Tous les enfants (0-18 ans) doivent obligatoirement avoir, a minima, une carte nationale d'identit?? et/ou un passeport, selon la nationalit?? et la destination.
                            Contactez votre compagnie a??rienne qui exige tr??s souvent de compl??ter un formulaire et de suivre une d??marche sp??cifique</div>

                    <!-- Question/Answer -->
                    <div class="animated fadeInRight wow" data-wow-delay=".6s">
                        <h4 class="question"><i class="mdi mdi-numeric-6-box text-secondary"></i> Voyager avec un animal : les formalit??s</h4>
                        <p class="answer">Le transport  de votre animal domestique (chien, chat, hamster???.) est autoris?? sur les vols nationaux et internationaux. Nous vous invitons ?? contacter directement votre compagnie.</div>
                </div>
                <!--/col-md-5-->
            </div>
            <!-- end row -->

        </div> <!-- end container -->
    </section>
    <!-- END FAQ -->

    <div class="text-center"><br>
        <iframe width="1000" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://www.openstreetmap.org/export/embed.html?bbox=2.460422505391762%2C48.972432282394685%2C2.577152241719887%2C49.034931748191916&amp;layer=mapnik&amp;marker=49.003691819972794%2C2.518787373555824"
                style="border: 1px solid black"></iframe><br/><small>
            <a href="https://www.openstreetmap.org/?mlat=49.0037&amp;mlon=2.5188#map=13/49.0037/2.5188" target="_blank">Afficher dans OpenStreetMap</a></small>
    </div>

    <!-- FOOTER -->
    <footer class="bg-gray footer">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <a class="logo text-decoration-none" href="#">
                            <i class="mdi mdi-chart-bubble"></i>
                            <span>A??roport</span>
                        </a>

                        <ul class="list-inline social-circle">
                            <li class="list-inline-item"><a href="https://twitter.com/Sbastien_93"> <i class="mdi mdi-twitter"></i> </a></li>
                            <li class="list-inline-item"><a href=""> <i class="mdi mdi-google-plus"></i> </a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/s%C3%A9bastien-letellier-48774322a/"> <i class="mdi mdi-linkedin"></i> </a></li>

                        </ul>

                        <ul class="list-inline menu-list m-t-30">
                            <li class="list-inline-item"><a href=""> ?? propos de nous</a></li>
                            <li class="list-inline-item"><a href=""> Aide & support</a></li>
                            <li class="list-inline-item"><a href=""> Conditions g??n??rales</a></li>
                            <li class="list-inline-item"><a href=""> Politique de confidentialit??</a></li>
                        </ul>

                        <p class="text-muted m-b-0"> ?? A??roport <script>document.write(new Date().getFullYear())</script>- Tous droits r??serv??s</p>

                   </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </footer>

    <!-- END FOOTER -->

    <!-- Javascript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- custom js -->
    <script src="js/app.js"></script>

</body>

</html>