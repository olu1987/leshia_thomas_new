<?php $title = 'Lefties |  Women’s outerwear, design project';
      $spinnerLogo = 'img/lefties-tile.png';
      $body = 'not-home lefties-bg'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container">
        <div class="row pt-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <img class="img-responsive page-header-logo" src="img/lefties-tile.png"/>
            </div>
        </div>
        <div class="row mb-50 text-center">
            <div class="col-md-6 col-md-offset-3 intro-col">
                <h2>Lefties<br><small>Women’s outerwear, design project</small></h2> 
                <p>I was asked to design an outwear collection of 5 coats/jackets.
                I knew that iridescence was going to be huge and based the items
                on that. The collection has simple shapes as it focuses on 
                texture and detailing- from pannelling to zips placements.      
                </p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive mb-50 center" src="img/lefties.jpg"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive mb-50 center" src="img/lefties-2.jpg"/>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row portfolio">
            <div class="col-md-12">
            <a data-anchor="home" data-link="index.php" class="tile home-tile col-md-4 col-sm-6 fade-out-link">
            <h3> Home</h3>
         </a>
         <span class="previous">
         <?php include 'tiles/lnt.php'; ?>
         </span>
         <span class="next">
         <?php include 'tiles/ocado.php'; ?>
         </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>