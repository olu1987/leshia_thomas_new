<?php $title = 'Shotgun | Logo and UI design';
      $spinnerLogo = 'img/shotgun-tile.png';
      $body = 'not-home shotgun-bg'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container shotgun-bg">
        <div class="row pt-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <img class="img-responsive page-header-logo" src="img/shotgun-tile.png"/>
            </div>
        </div>
        <div class="row mb-50 text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2>Shotgun <br><small>UI Design, Logo and branding</small> </h2> 
                <p>Shotgun are a startup that market themselves as an "uber for builders".
                  The idea being that people post jobs on the app, and builders are able to pick 
                  the job based on their proximity to the customer. I'm continuing to work with Shotgun
                  as they prepare to put the app into alpha testing in the very near future.
                 </p>
            </div>
        </div>
        <div class="row task-description">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                   <img class="img-responsive center phone-image" src="img/shotgun-home.png"/>
                </div>
                <div class="col-md-4 col-sm-4">
                   <img class="img-responsive center phone-image" src="img/shotgun-dashboard.png"/>
                </div>
                <div class="col-md-4 col-sm-4">
                   <img class="img-responsive center phone-image" src="img/shotgun-sidebar.png"/>
                </div>
              </div>
            </div>
        </div>
        <div class="row task-description">
            <div class="col-md-10 col-md-offset-1">
             <img class="img-responsive" src="img/shotgun-color-pallette.png"/>
            </div>
        </div>
        <div class="row task-description">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
              <div class="col-md-4 col-sm-4">
                   <img class="img-responsive center phone-image" src="img/shotgun-shopping-screen-1.png"/>
                </div>
                <div class="col-md-4 col-sm-4">
                   <img class="img-responsive center phone-image" src="img/shotgun-shopping-screen-2.png"/>
                </div>
                <div class="col-md-4 col-sm-4">
                   <img class="img-responsive center phone-image" src="img/shotgun-shopping-screen-3.png"/>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="container">
       <div class="row portfolio">
            <div class="col-md-12">
            <a data-anchor="home" data-link="index.php" class="tile home-tile col-md-4 col-sm-6 fade-out-link">
              <h3> Home </h3>
            </a>
            <span class="previous">
            <?php include 'tiles/ocado.php'; ?>
            </span>
            <span class="next">
            <?php include 'tiles/darling.php'; ?>
            </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>