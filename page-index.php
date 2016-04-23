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
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
        
              <div class="item active">
                <img src="images/volunteer.jpg" alt="Chania" width="600" height="400">
                
              </div>
        
              <div class="item">
                <img src="images/captivity.jpg" alt="Chania" width="600" height="400">
                
              </div> 

              <div class="item">
                <img src="images/_55833600_whale.jpg" alt="Chania" width="600" height="400">
                
              </div>

              <div class="item">
                <img src="images/544603_10151307196408795_671838169_n.jpg" alt="Chania" width="600" height="400">
                
              </div>

              <div class="item">
                <img src="images/children.jpg" alt="Chania" width="600" height="400">
                
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
    <section class="col-md-4 page-mid-title" id="savewhales">
      <section class="col-md-2 page-mid-title">
          <h2>
               Enter your email and click the Subscribe button below to learn more about Save the Whales programs, petitions, fun facts and more! 
          </h2>
          <form class="pure-form pure-form-stacked">
              <fieldset>
                  <input class="pure-input-1" id="membership-email" type="email" placeholder="Email Address">
                  <button type="submit" class="pure-button pure-button-primary">Subscribe</button>
              </fieldset>
          </form>
        </section>
          <section class="col-md-2 page-mid-title">
          <h2> Please help support our organization and bring us closer to our goal of protecting the Whales and their environment.</h2>
              <button type="button" id="donate" class="pure-button pure-button-primary">Donate to Save the Whales Today!</button>
         
      </section>
      </section>
       
  </div>
  <div class="row">
    <section class="col-md-4 new_stories" id="s1">
        <h2>
            Learn
        </h2>
        <img src="images/education.png" alt="Learn" style="height:128px; width:128px;">
    </section>
    <section class="col-md-4 new_stories" id="s2">
        <h2>
            Teach
        </h2>
        <img src="images/school.png" alt="Teach" style="height:128px; width:171px;">

    </section>
    <section class="col-md-4 new_stories" id="s3">
        <h2>
            Volunteer
        </h2>
        <img src="images/hand.png" alt="Volunteer" style="height:128px; width:88px;">

    </section>
  </div>
  <div class="row">
    <section class="col-md-4 page-mid-title">
        <h2>
            BECAUSE WE CARE FOR ALL MARINE ANIMALS 
        </h2>
        <img src="images/killerwhale.jpg" alt="">
        <h3>
        	Especially The Whales!
        </h3>
    </section>
  </div>
</div>
  
  <?php
      include "includes/footer.php";
  ?>

</body>
</html>
