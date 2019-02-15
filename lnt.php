<?php $title = 'LNT London';
      $spinnerLogo = 'img/lnt-tile.png';
      $body = 'not-home lnt-bg'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container lnt-bg">
        <div class="row pt-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <img class="img-responsive page-header-logo" src="img/lnt-tile.png"/>
            </div>
        </div>
        <div class="row mb-50 text-center">
            <div class="col-md-8 col-md-offset-2">
                <h2>LNT London<br><small>Website UI/UX, Branding, Marketing</small></h2> 
                <p>LNT London is my own company. I designed all of the visual content from the branding 
                    to UI & UX for the website. I worked with Olu Meduoye (Front End designer) to create a elegant, clean aesthetic that’s easy to use. </p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-10 col-md-offset-1 mb-30">
                <img class="img-responsive" src="img/lnt-devices-1.jpg"/>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-10 col-md-offset-1 mb-30">
                <img class="img-responsive" src="img/lnt-devices-2.jpg"/>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-10 col-md-offset-1 mb-30">
                <img class="img-responsive" src="img/lnt-devices-3.jpg"/>
            </div>
        </div>
    </div>
    <div class="container lnt-bg">
        <div class="row portfolio">
            <div class="col-md-12">
            <a data-anchor="home" data-link="index.php" class="tile home-tile col-md-4 col-sm-6 fade-out-link">
            <h3> Home</h3>
         </a>
         <span class="previous">
         <?php include 'tiles/windrush.php'; ?>
         </span>
         <span class="next">
         <?php include 'tiles/lefties.php'; ?>
         </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>