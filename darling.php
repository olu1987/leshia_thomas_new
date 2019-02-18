<?php $title = 'Darling |  Women’s soft separates, design project';
      $spinnerLogo = 'img/darling-tile.png';
      $body = 'not-home darling-bg'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container darling-bg">
        <div class="row pt-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <img class="img-responsive page-header-logo" src="img/darling-tile.png"/>
            </div>
        </div>
        <div class="row mb-50 text-center">
            <div class="col-md-6 col-md-offset-3 intro-col">
                <h2>Darling<br><small>Womenswear - Soft Separates</small></h2> 
                <p>I was asked to create a summer collection for women in their early
                30s. I knew pinks and pastels were the colours for the season so I
                chose to do a romantic theme. I drew illustrations of flamingos and
                turned them into repeat prints as well as designing delicate cut
                aways and sheer panelling.  
                </p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive" src="img/darling-mood-board-1.jpg"/>
            </div>
        </div>
        <div class="row task-description">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive" src="img/darling-mood-board-2.jpg"/>
            </div>
        </div>
    </div>
    <div class="container darling-bg">
        <div class="row portfolio">
            <div class="col-md-12">
            <a data-anchor="home" data-link="index.php" class="tile home-tile col-md-4 col-sm-6 fade-out-link">
            <h3> Home</h3>
         </a>
         <span class="previous">
         <?php include 'tiles/ocado.php'; ?>
         </span>
         <span class="next">
         <?php include 'tiles/om.php'; ?>
         </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>