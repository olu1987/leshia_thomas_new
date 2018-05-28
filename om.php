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
            <div class="col-md-8 col-md-offset-2">
                <h2>Olu Meduoye<br>Website UI/UX</h2> 
                <p>I have worked with Olu on quite a few different projects and was delighted when he asked 
                  me to design the UI on his own portfolio. </p>
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
            <a data-link="shotgun.php" class="tile col-md-4 col-sm-6 shotgun fade-out-link">
                 <div class="col-md-12 text-center vantworks-logo-grid">
                     <img class="img-responsive vantworks-logo" src="img/shotgun-tile.png">
                 </div>
                 <div class="title-wrap">
                     <h3>
                     <small>
                         Previous Project
                     </small><br>
                         Shotgun
                         <br>
                         <small>
                             UI Design, Logo and branding
                         </small>
                     </h3>
                 </div>
             </a>
             <a data-link="bodhan.php" class="tile col-md-4 col-sm-6 bodhan fade-out-link">
                <img class="img-responsive" src="img/bodhan-tile.png"/>
                <div class="title-wrap">
                    <h3>
                    <small>
                         Next Project
                     </small><br>
                        Bodhan Consulting<br>
                        <small>Logo and Branding</small>
                    </h3>

                </div>
             </a>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>