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
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../../../../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../../../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../../../../images/1.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../../../css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="../../../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <!--[if lt IE 9]>

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <![endif]-->

</head>
<!-- body -->
<body class="main-layout">



<section >
    <div class="banner-main">
        <div class="container">
            <div class="text-bg">
                <h1><br><br><strong class="white">Connexion</strong></h1>
                <div class="container">
                    <form action="loginPiloteBDD.php" method="post" class="main-form">

                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Nom</label>
                                        <input class="form-control" placeholder="" type="text" name="nom">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <label >Prenom</label>
                                        <input class="form-control" placeholder="" type="text" name="prenom">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <button class="form-control" type="submit">login</button>
                            </div>
                        </div>
                    </form>
                    <a href="login.php">Connexion Client</a></small>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>

<!-- Javascript files-->
<script src="../../../../js/jquery.min.js"></script>
<script src="../../../../js/popper.min.js"></script>
<script src="../../../../js/bootstrap.bundle.min.js"></script>
<script src="../../../../js/jquery-3.0.0.min.js"></script>
<script src="../../../../js/plugin.js"></script>
<!-- sidebar -->
<script src="../../../../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../../../js/custom.js"></script>
<!-- javascript -->
<script src="../../js/owl.carousel.js"></script>
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