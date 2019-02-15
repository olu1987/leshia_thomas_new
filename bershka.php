<?php $title = 'Bershka | Womens outerwear, design project';
      $spinnerLogo = 'img/bershka-tile.png';
      $body = 'not-home bershka-bg'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container bershka-bg">
        <div class="row pt-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <img class="img-responsive page-header-logo" src="img/bershka-tile.png"/>
            </div>
        </div>
        <div class="row mb-50 text-center">
            <div class="col-md-6 col-md-offset-3 intro-col">
                <h2>Bershka<br><small>Womens outerwear, design project</small></h2> 
                <p>I was contacted to create a party wear range for older teens-young adults for 
                Christmas. The collection has dark abstract prints with bold hues saturating them, embellishment and glitters trickling 
                throughout.  
                </p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive" src="img/bershka-mood-board.jpg"/>
            </div>
        </div>
        <div class="row task-description">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive" src="img/bershka-color-pallette.jpg"/>
            </div>
        </div>
    </div>
    <div class="container bershka-bg">
        <div class="row portfolio">
            <div class="col-md-12">
            <a data-anchor="home" data-link="index.php" class="tile home-tile col-md-4 col-sm-6 fade-out-link">
              <h3> Home</h3>
            </a>
            <span class="previous">
                <?php include 'tiles/harvest.php'; ?>
            </span>
            <span class="next">
                <?php include 'tiles/bodhan.php'; ?>
            </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>