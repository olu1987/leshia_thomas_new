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
            <div class="col-md-6 col-md-offset-3 intro-col">
                <h2>LNT London<br><small>Website UI/UX, Branding, Marketing</small></h2> 
                <p>LNT London is my own company. We are a luxury, boutique fashion brand based in the UK.
                   Working with web developers, I built the entire UI/UX of the LNT London website.
                    My main focus was ensuring that the site looked clean, was easy to use, and was consistent
                   with our brand identity and values. The feedback on the website has been overwhelmingly
                   positive.
              </p>
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
         <?php include 'tiles/bodhan.php'; ?>
         </span>
         <span class="next">
         <?php include 'tiles/lefties.php'; ?>
         </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>