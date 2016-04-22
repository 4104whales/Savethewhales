<?php
	include "includes/head.php";
?>
<title>Membership | Save the Whales</title>
</head>

<body>

    <div class="container-fluid">
        <?php
            include "includes/header.php";
        ?>
      	
        <div class="row">
          <section class="col-md-12 page-title">
                <h1>
                     Help By Becoming A Member Of Save The Whales 
                </h1>
                <h4>
                     One Person Can Make A Difference! 
                </h4>
          
            </section>
        </div>
        <div class="row">
          <section class="col-md-4 new_stories" id="member1">
              <img src="images/SABlueWhale.jpg" alt="" height="300" width="500">
              <h1>
                  Child
              </h1>
              <p>
                  Your child would love this amazing whale plush toy when you sign up him or her to be a Save The Whale member. 
              </p>
          </section>
          <section class="col-md-4 new_stories" id="member2">
              <img src="images/svw_tote.png" alt="" height="400" width="300">
              <h1>
                  Regular
              </h1>
              <p>
                  When you sign up to be a regular member of Save The Whales you receive a tote bag with our logo on it.  
              </p>
          </section>
          <section class="col-md-4 new_stories" id="member3">
              <img src="images/SVWmug.png" alt="" height="300" width="500">
              <h1>
                  Student/Senior
              </h1>
              <p>
                  If you’re a student or a senior you get our specialty discount rate and a lovely coffee mug with our logo on it when you become a member of Save The Whales.
              </p>
          </section>
        </div>
        <div class="row">
          <section class="col-md-4 form-center">
              <form class="pure-form pure-form-stacked">
                  <fieldset>
                      <div class="pure-u-1 pure-u-md-1-3">
                          <select id="membership-type" class="pure-input-1">
                              <option disabled selected>Membership Type</option>
                              <option>Child</option>
                              <option>Regular</option>
                              <option>Student/Senior</option>
                          </select>
                      </div>
                      <input class="pure-input-1" id="membership-name" type="text" placeholder="Full Name"> 
                      <input class="pure-input-1" id="membership-email" type="email" placeholder="Email">
                      <input class="pure-input-1" id="membership-address" type="text" placeholder="Address"><br><br>
                      <input type="submit" id="join" class="pure-button pure-button-primary" value="Join"><br><br><br>
                  </fieldset>
              </form>
          </section>
        </div>
    
    </div>
    
    <?php
        include "includes/footer.php";
    ?>

</body>
</html>
