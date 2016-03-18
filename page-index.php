<?php
	include "includes/head.php";
?>
<title>Home | Save the Whales</title>
</head>

<body>

<div class="container-fluid">
	<?php
		include "includes/header.php";
    ?>
    <div class="row">
        <h1 class="page-title">
            Save the Whales is a 501(c)(3) Nonprofit Educational Organization that educates kids and adults about marine life and how to preserve their way of living.
        </h1>
    </div>
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
        
              <div class="item active">
                <img src="images/Carousel_Placeholder.png" alt="Chania" width="600" height="400">
                <div class="carousel-caption">
                  <h3>Slider Item</h3>
                  <p>This is a placeholder slider item.</p>
                </div>
              </div>
        
              <div class="item">
                <img src="images/Carousel_Placeholder.png" alt="Chania" width="600" height="400">
                <div class="carousel-caption">
                  <h3>Slider Item</h3>
                  <p>This is a placeholder slider item.</p>
                </div>
              </div>          
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
  	</div>
  
  <div class="row">
    <section class="col-md-4 page-mid-title">
          <h2>
               Enter your email and click the Subscribe button below to learn more about Save the Whales programs, petitions, fun facts and more! 
          </h2>
          <form class="pure-form pure-form-stacked">
              <fieldset>
                  <input class="pure-input-1" id="membership-email" type="email" placeholder="Email">
                  <button type="submit" class="pure-button pure-button-primary">Subscribe</button>
              </fieldset>
          </form>
      </section>
  </div>
  <div class="row">
    <section class="col-md-4 new_stories">
        <h2>
            Learn
        </h2>
        <img src="images/Carousel_Placeholder.png" alt="">
        <p>
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
        </p>
    </section>
    <section class="col-md-4 new_stories">
        <h2>
            Teach
        </h2>
        <img src="images/Carousel_Placeholder.png" alt="">
        <p>
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
        </p>
    </section>
    <section class="col-md-4 new_stories">
        <h2>
            Volunteer
        </h2>
        <img src="images/Carousel_Placeholder.png" alt="">
        <p>
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
        </p>
    </section>
  </div>
  <div class="row">
    <section class="col-md-4 page-mid-title">
        <h2>
            BECAUSE WE CARE FOR ALL MARINE ANIMALS 
        </h2>
        <img src="images/Carousel_Placeholder.png" alt="">
        <h3>
        	Especially The Whales 
        </h3>
    </section>
  </div>
</div>
  
  <?php
      include "includes/footer.php";
  ?>

</body>
</html>
