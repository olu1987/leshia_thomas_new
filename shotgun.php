<?php $title = 'Shotgun | UI/UX and logo';
      $spinnerLogo = 'img/shotgun-logo.png';
      $body = 'not-home shotgun-page'
?>
<?php include 'header.php'; ?>

    <!-- Add your site or application content here -->
    <div class="container">
      <div class="row header-row">
        <div class="col-md-4 col-md-offset-1">
          <img class="img-responsive" src="img/shotgun-logo.png" />
        </div>
        <div class="col-md-6">
          <p>Shotgun are a startup that market themselves as an "uber for builders". The idea being 
            that customers post jobs on the app and, builders are able to pick the job based on their 
            proximity to the customer. The brief was for UI/UX, logo and custom iconography design.
            </p>
        </div>
      </div>
      <div class="row feature-row">
        <div class="col-md-4 col-md-offset-1 col-sm-6">
           <h2>Onboarding</h2>
           <p>For the onbarding screens I ensured there was clear differentiation 
             between the view for builders vs customers. This was done using distinct colour themes
             and by creating bespoke illustrations for each view.
            </p>
        </div>
        <div class="col-md-6 col-sm-6 col-md-offset-1 px-0">
          <img class="img-responsive" src="img/shotgun-app-welcome.png" />
        </div>
      </div> 
      <div class="row feature-row reverse">
        <div class="col-md-7 col-sm-6 col-md-offset-1">
          <img class="img-responsive" src="img/shotgun-wireframe.png" />
        </div>
        <div class="col-md-4 col-sm-6">
           <h2>wireframes</h2>
           <p>Working with the client and development team I created wireframes for us to plan out the user
             journey for builders and customers. 
            </p>
        </div>
      </div>
      <div class="row feature-row">
        <div class="col-md-4 col-md-offset-1 col-sm-6">
           <h2>User Profile</h2>
           <p>The user profile I designed is simple but intuitive. The navigation buttons feature 
             some of the custom iconography library that I created for the client.
            </p>
            <img class="img-responsive" src="img/shotgun-account-buttons.png" />
        </div>
        <div class="col-md-6 col-sm-6 col-md-offset-1 px-0">
          <img class="img-responsive" src="img/shotgun-account-page.png" />
        </div>
      </div>
      <div class="row feature-row reverse">
        <div class="col-md-6 col-md-offset-1 col-sm-6 px-0">
          <img class="img-responsive" src="img/shotgun-typography.png" />
        </div>
        <div class="col-md-4 col-md-offset-1 col-sm-6">
           <h2>Typography</h2>
           <p>Working with the client we decided on <em>Jubilat</em> font type for the headings,
             and <em>Acumin Pro</em> for all other text. I felt both these fonts
             had the correct feel for an app within the building and construction sector.
            </p>
        </div>
      </div>
      <div class="row feature-row">
        <div class="col-md-4 col-md-offset-1 col-sm-6">
           <h2>Colours</h2>
           <p>The palette I created mixed colours that would be quite familiar to 
             builders and those in that industry, with others that are more generic and 
             familiar to customers and builders alike. 
            </p>
        </div>
        <div class="col-md-8 col-sm-6 col-md-offset-1">
          <img class="img-responsive" src="img/shotgun-color-palette.png" />
        </div>
      </div>
      <div class="row footer-text-row">
        <div class="col-md-8 col-md-offset-2">
           <p>The client and I were very pleased with the outcome of our work together.
             The shotgun app is currently in alpha testing. As soon as it is released, I 
             will include a link here.
            </p>
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
            <?php include 'tiles/bershka.php'; ?>
            </span>
            <span class="next">
            <?php include 'tiles/ad.php'; ?>
            </span>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>