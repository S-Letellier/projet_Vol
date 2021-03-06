<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Start Bootstrap Theme</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/1.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--[if lt IE 9]>

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <style type="text/css">
        #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height:400px;
        }
    </style>
    <![endif]-->

</head>
<!-- body -->
<body class="main-layout">
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="header_white_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_information">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <br>
                                    <li class="active"> <a href="index_1.php">Home</a> </li>
                                    <?php if(isset($_SESSION['email'])){?>
                                        <li><a href="scr/Traitement/user/modifier/Modifier.php">Modification</a></li>
                                        <li><a href="scr/Traitement/user/deconnection/deconnection.php">Déconnexion</a></li>
                                    <?php }if(isset($_SESSION['nom'])){?>
                                        <li><a href="scr/Traitement/user/modifier/modifierPilote.php">Modification</a></li>
                                        <li><a href="scr/Traitement/user/deconnection/deconnection.php">Déconnexion</a></li>
                                    <?php }else{?>
                                        <li><a href="scr/Traitement/user/login/login.php">Login</a></li>
                                        <li><a href="scr/Traitement/user/inscription/inscription.php">Inscription</a></li>
                                        <li><a href="scr/Traitement/pageUtilisateur.php">Votre compte</a></li>
                                    <?php }?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
<section >
    <div class="banner-main">
        <div class="container">
            <div class="text-bg">
                <h1><br><br><strong class="white">Insertion de votre vol</strong></h1>
                <div class="button_section"> <a class="main_bt" href="#">Read More</a>  </div>
                <div class="container">
                    <form action="scr/Traitement/traitement_vol.php" method="post" class="main-form">
                        <h3>Veuillez insérer votre vol</h3>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Date</label>
                                        <input class="form-control" placeholder="Any" type="date" name="date_depart">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Heure départ</label>
                                        <input class="form-control" placeholder="Any" type="time" name="heure_depart">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Heure arriver</label>
                                        <input class="form-control" placeholder="Any" type="time" name="heure_arrivee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Pilote</label>
                                        <input class="form-control" placeholder="Any" type="number" name="ref_pilote">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Avion</label>
                                        <input class="form-control" placeholder="Any" type="number" name="ref_avion">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <button class="form-control" type="submit">Inserer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="text-center"><br>
    <a href="scr/Traitement/pilotes.php">SelectPilote</a>
    <a href="scr/Traitement/avion.php">SelectAvion</a> </br>
    <a href="scr/Traitement/Datatable.php">AfficherDatatable</a> </br>
    <a href="scr/Traitement/modifier_vol.php">Modifier</a>
    <a href="scr/Traitement/supprimervol.php">Supprimer</a>
</div>
<br>
<br>
<br>
<h3>Vol déjà réaliser</h3>
<table id="table_id" class="display">
    <thead>
    <tr>
        <th>Date departs</th>
        <th>Heure departs</th>
        <th>Heure d'arrivees</th>
        <th>Le pilote</th>
        <th>L'avion</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once 'scr/BDD/BDD.php';
    require_once 'scr/Modele/Vol.php';

    $vol = new Vol(array());
    foreach ($vol->setSelect() as $values){
        ?>
        <tr>
            <td><?php echo $values['date_depart']?></td>
            <td><?php  echo $values['heure_depart'] ?></td>
            <td><?php  echo $values['heure_arrivee'] ?></td>
            <td><?php  echo $values['ref_pilote'] ?></td>
            <td><?php  echo $values['ref_avion'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>$(document).ready( function () {
        $('#table_id').DataTable();
    } );</script>
<br>
<br>


<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>

</body>
</html>