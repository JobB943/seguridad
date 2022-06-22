<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../php/css/styleA.css">
    <link rel="stylesheet" href="../php/css/style.css">
    <title>Alarma</title>
</head>
<body class="main-layout"> 
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
                    <a href="../php/alarma.html">Alarmas</a>
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
                            <li class="button_user"><a class="button" href="../php/indexlogin.php">Volver</a>                            <li>
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
<!-- end header -->
    <section class="container">
        <div id="clock"></div>
        <input onchange="setAlarmTime(this.value)" name="alarmTime" type="datetime-local">
        <div class="controls">
            <button onclick="setAlarm()" class="button set-alarm">Set alarm</button>
            <button onclick="clearAlarm()" class="button clear-alarm">Clear alarm</button>
        </div>
    </section>
    <script src="../php/js/alarma.js"></script>
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