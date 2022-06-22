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
    <title>Seguridad para ti</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleMe.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="../php/indexlogin.php">Inicio</a>
                    </li>
                    <li>
                        <a href="......">Alarmas</a>
                    </li>
                    <li>
                        <a href="../php/chat.html">Chat</a>
                    </li>
					<li>
                        <a href="../php/agendar.php">Agendar <img src="images\perfilpicture.jpg" alt="" marginwidth="30"></a>
                    </li>
                    <li>
                        <a href="../php/calendario.php">Calendario</a>
                    </li>
                    <li>
                        <a href="../php/perfil.php">Perfil <img src="images\perfilpicture.jpg" alt="" marginwidth="30"></a>
                    </li>
                    <li>
                        <a href="../php/medicamentos.php">Medicamentos</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="../php/indexlogin.php"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">Nosotros@misena.edu.co</a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">104 Medellín , Colombia</a></li>
                                <li class="button_user"><a class="button" href="../php/indexlogin.php">volver</a>
                                <li><img style="margin-right: 10px;" src="images/search_icon.png" alt="#"></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="seccion-perfil-medicamento">
        <div class="perfil-medicamento-header">
            <div class="perfil-medicamento-portada">
                <div class="perfil-medicamento-avatar" >
                </div>
            </div>
        </div>
        <div class="perfil-medicamento-body">&nbsp<p style="font-size: 45px">Medicamentos</p>&nbsp
            <div class="perfil-medicamento-bio">
            </div>
            <div class="perfil-medicamento-footer">
                <ul class="lista-datos">
                    <li>paracetamon</li>
                    <li>Simvastatina</li>
                    <li>Aspirina</li>
                    <li>Omeprazol</li>
                </ul>
                <ul class="lista-datos">
                    <li>Lexotiroxina</li>
                    <li>Ramipril</li>
                    <li>Amlodipina</li>
                    <li>Atorvastatina</li>
                </ul>
            </div>
        </div>
        &nbsp;
        <ul>
            <li class="button_user"><a class="button" href="../php/indexlogin.php" style="background-color:#ABC3C5; border-radius:53%;">modificar</a>
            <li class="button_user"><a class="button" href="../php/indexlogin.php" style="background-color:#ABC3C5; border-radius:53%;">agregar</a>
        <ul>
    </section>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
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
                 items: 5
               }
             }
           })
         })
      </script>
</body>
</html>