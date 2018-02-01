<!DOCTYPE>
<html>
    <head lang="fr">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, maximum-scale=1"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/style_mines.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/ets.jpg">

        <title>Ets Engineering Service&amp;Consulting</title>

        <style>
            body{
                font-family: 'Raleway', sans-serif;
            }
            #map {
                position: relative;
                height: 400px;
                border: 5px solid rgba(139, 102, 0, 0.562);
                border-radius: 10px;
            }

        </style>

    </head> 
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monMenu">
                        <span class="fa fa-bars fa-2x ass"></span>
                    </button>
                    <a href="index.php" class="nom-site"><img src="img/ets.jpg" class="img-site"></a>
                </div>
                
                <div class="collapse navbar-collapse" id="monMenu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="active">Nos services</a></li>
                        <li><a href="#">Formations</a></li>
                        <li><a href="#">Galerie</a></li>
                        <li><a href="#">Découvrir sites miniers</a></li>
                        <li><a href="#">A propos de nous</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        

        <div id="body6">
            <div id="mines">
                <div class="container">
                    <h1>Liste de site miniers</h1>
                    <div class="row">
                    
                    <?php  
                       $tabCode = array("site-00-01-enim-0001", "site-00-02-enim-0002", "site-00-03-enim-0003");
                       $code = $_POST['code'];

                       if (in_array($code, $tabCode))
                       {
                    ?>
                        <div class="col-md-12">    
                            <h2>Yeahhhhhhhhhhhhh !!!!!!!!!!!!!</h2>
                        </div>
                    <?php
                        } else {
                    ?>
                        <div class="col-md-12">
                        <h2>Nooooonn !!!!</h2>
                        </div>
                    <?php
                       }
                    ?>

                    </div>
                </div>
            </div>
        </div>

        
    

        
        

        <footer>
            <p>
                <a href="index.php">Index</a><br>
                <a href="#">Nos Services</a><br>
                <a href="#">Formations</a><br>
                <a href="#">Galerie</a><br>
                <a href="#">Téléchargement</a><br><br>
                Copyright Ets Engineering &amp; Consulting &copy; 2018 <br>
            </p>
        </footer>
        <script>
            function initMap() {
              // Create a map object and specify the DOM element for display.
              var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 3.88457482, lng: 11.514830},
                zoom: 14
              });
              marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: {lat: 3.88457482, lng: 11.514830}
                });
              marker.addListener('click', toggleBounce);
            }
            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }
        </script>

        <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/effets.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=
        AIzaSyA2wYf_iYuMaHU2e2513wvgF1IgxyVFRfs&callback=initMap" async defer></script>

    </body>
</html>