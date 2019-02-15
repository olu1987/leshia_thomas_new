<?php $title = 'Olu Meduoye | Website UI/UX';
      $spinnerLogo = 'img/om-tile.png';
      $body = 'not-home om-bg'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container om-bg">
        <div class="row pt-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <img class="img-responsive page-header-logo" src="img/om-tile.png"/>
            </div>
        </div>
        <div class="row mb-50 text-center">
            <div class="col-md-6 col-md-offset-3 intro-col">
                <h2>Olu Meduoye<br><small>Website UI/UX</small></h2> 
                <p>
                  Olu Meduoye is a web developer and frontend engineer based in London.
                I have collaborated with him on numerous projects and was delighted when he asked 
                  me to do a redesign for his very own portfolio. We were both very pleased with the 
                slick, clean and professional look and feel of the<br> new website. </p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8 col-md-offset-2 mb-30">
                <img class="img-responsive" src="img/om-page-1.jpg"/>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8 col-md-offset-2 mb-30">
                <img class="img-responsive" src="img/om-page-2.jpg"/>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8 col-md-offset-2 mb-30">
                <img class="img-responsive" src="img/om-page-3.jpg"/>
            </div>
        </div>
        
    </div>
    <div class="container om-bg">
        <div class="row portfolio">
            <div class="col-md-12">
                <a data-anchor="home" data-link="index.php" class="tile home-tile col-md-4 col-sm-6 fade-out-link">
                  <h3> Home</h3>
                </a>
                <span class="previous">
                  <?php include 'tiles/darling.php'; ?>
                </span>
                <span class="next">
                  <?php include 'tiles/pull-and-bear.php'; ?>
                </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>