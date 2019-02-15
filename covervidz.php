<?php $title = 'Covervidz | Logo and branding';
      $spinnerLogo = 'img/covervidz-tile.png';
      $body = 'not-home covervidz-solid-bg'
?>
<?php include 'header.php'; ?>
    <!-- Add your site or application content here -->
<div class="container covervidz-solid-bg">
    <div class="row pt-20">
        <div class="col-md-6 col-md-offset-3 tvp-header text-center">
            <img class="img-responsive page-header-logo" src="img/covervidz-tile.png"/>
        </div>
    </div>
    <div class="row mb-50 text-center">
        <div class="col-md-6 col-md-offset-3 intro-col">
            <h2>Covervidz<br><small>Logo and branding</small></h2>
            <p class="pt-10">
                Covervidz is a web application that uses the youtube API to allow users
                to search for popular covers of their favourite song. 
                I designed the logo for this project and also assisted with UI/UX. 
            </p>   
        </div>
    </div>
    <div class="row mb-50">
        <div class="col-md-4 col-sm-4 col-sm-offset-2 text-center">
            <img class="img-responsive center" src="img/covervidz-2.png"/>
        </div>
        <div class="col-md-4 col-sm-4 text-center">
            <img class="img-responsive center" src="img/covervidz-3.png"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img class="img-responsive center" src="img/covervidz-devices.jpg"/>
        </div>
    </div>
    </div>
    <div class="container ">
        <div class="row portfolio">
            <div class="col-md-12">
            <a data-anchor="home" data-link="index.php" class="tile home-tile col-md-4 col-sm-6 fade-out-link">
              <h3> Home </h3>
            </a>
            <span class="previous">
            <?php include 'tiles/lefties.php'; ?>
            </span>
            <span class="next">
            <?php include 'tiles/ocado.php'; ?>
            </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>