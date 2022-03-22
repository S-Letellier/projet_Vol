<html>
<head><script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
</head>
<body>
<h3>Vol déjà réaliser</h3>
<table id="table_id" class="display">
    <thead>
    <tr>
        <th>Date depart</th>
        <th>Heure depart</th>
        <th>Heure d'arrivee</th>
        <th>Le pilote</th>
        <th>L'avion</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once '../BDD/Bdd.php';
    require_once '../Modele/Vol.php';

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
                                        <li class="active"> <a href="connexion.php">Home</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </tbody>
</table>
<script>$(document).ready( function () {
        $('#table_id').DataTable();
    } );</script>

</body>
</html>