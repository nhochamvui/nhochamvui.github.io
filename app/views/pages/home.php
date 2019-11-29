 <?php
    session_start();
?>

 <link rel="stylesheet" href="public/css/home.css?version=1.1">
 <title>Home</title>
 </head>

 <body>
     <div>
         <?php require 'app/views/components/header.php'; ?>
         <div class="container">
             <div class="row">
                 <div class="img-container col">
                     <img src="public/img/navbrand.png" alt="">
                     <div class="col img-wrapper">
                         <img src="public/img/best-seller.jpg" alt="#">
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col content-container">
                     <div class="title">
                         <h1>We Serve You The Best</h1>
                         <h4>Some thing about us</h4>
                     </div>
                     <div class="body-container">
                         <p>
                             Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                             Aenean commodo ligula eget dolor. Aenean massa.
                             Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                             Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                             Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                             In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                             Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                             Cras dapibus. Vivamus elementum semper nisi.
                             Aenean vulputate eleifend tellus.
                             Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                             Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                             Phasellus viverra nulla ut metus varius laoreet.
                         </p>
                     </div>

                 </div>
             </div>

             <div>
                 <div class="title">
                     <h1>Our Human Resource</h1>
                     <h4>Who buid this</h4>
                 </div>
                 <?php
                    include 'app/views/components/infoCard.php';
                    ?>
             </div>


         </div>

     </div>

     <div>
         <?php require 'app/views/components/footer.php'; ?>
     </div>

     <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
     <script src="public/js/authentication.js" type="text/javascript"></script>