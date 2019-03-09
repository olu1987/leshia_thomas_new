<?php $title = 'LNT London';
      $spinnerLogo = 'img/lnt-tile.png';
      $body = 'not-home'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container lnt-bg">  
      <div class="row header-row">
          <div class="col-md-4 col-md-offset-1">
            <img class="img-responsive" src="img/lnt-key.png" />
          </div>
          <div class="col-md-6">
            <p>LNT London is my own company. We are a luxury, boutique fashion brand based in the UK. 
              Working with a develoment team, I did all the UI/UX of the LNT London website. My 
              main focus was ensuring that the site looked clean, was usable and intuitive, and was consistent 
              with our brand identity and values. You can view the website at <a target="_blank" href="http://lntlondon.com/">lntlondon.com</a>
              </p>
          </div>
        </div>  
    <div class="row feature-row">
        <div class="col-md-10 col-md-offset-1">
           <img class="img-responsive screenshot" src="img/lnt-header-image.jpg" />
        </div>    
    </div>    
      <div class="row feature-row lnt-typography">
        <div class="col-md-6 col-sm-6 col-md-offset-1">
          <img class="img-responsive" src="img/lnt-typography.png" />
        </div>
        <div class="col-md-4 col-sm-6">
           <h2>typography and colour</h2>
           <p>
             I chose <em>Trajan Pro</em> font type for the headings,
             and <em>Helvetica Neue</em> for all other text. The colour
             palette is just simple black and white as I wanted the site to be clean.
             Also the imagery and products are very colourful, so I didn't want the
             user to be overwhelmed by too much colour.
            </p>
            <div class="col-xs-8 col-xs-offset-2 pt-50">
            <img class="img-responsive" src="img/lnt-color-palette.png" />
            </div>
        </div>
      </div>
      <div class="row feature-row">
        <div class="col-md-10 col-md-offset-1">
           <img class="img-responsive screenshot" src="img/lnt-print-page.jpg" />
        </div>    
      </div>  
      <div class="row feature-row">
        <div class="col-md-10 col-md-offset-1">
           <img class="img-responsive screenshot" src="img/lnt-accessories-page.jpg" />
        </div>    
      </div>  
      <div class="row feature-row">
        <div class="col-md-10 col-md-offset-1">
           <img class="img-responsive screenshot" src="img/lnt-clothing-page.jpg" />
        </div>    
      </div>  
      <div class="row feature-row">
        <div class="col-md-10 col-md-offset-1">
           <img class="img-responsive screenshot" src="img/lnt-item-page.jpg" />
        </div>    
      </div>  
      <div class="row feature-row">
        <div class="col-md-10 col-md-offset-1">
           <div class="row">
             <div class="col-md-4 col-sm-4 col-xs-6">
               <img class="img-responsive screenshot" src="img/lnt-mobile-one.jpg" />
             </div>
             <div class="col-md-4 col-sm-4 col-xs-6">
               <img class="img-responsive screenshot" src="img/lnt-mobile-two.jpg" />
             </div>
             <div class="col-md-4 col-sm-4 col-xs-6">
               <img class="img-responsive screenshot" src="img/lnt-mobile-three.jpg" />
             </div>
           </div>
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
         <?php include 'tiles/ad.php'; ?>
         </span>
         <span class="next">
         <?php include 'tiles/lefties.php'; ?>
         </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>