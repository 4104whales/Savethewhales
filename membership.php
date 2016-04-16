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
                <h2>
                     One Person Can Make A Difference! 
                </h2>
                <img src="images/tshirts014.jpg" alt="">
            </section>
        </div>
        <div class="row">
          <section class="col-md-4 new_stories">
              <img src="images/SABlueWhale.jpg" alt="">
              <h2>
                  Child
              </h2>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
              </p>
          </section>
          <section class="col-md-4 new_stories">
              <img src="images/svw_tote.png" alt="">
              <h2>
                  Regular
              </h2>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
              </p>
          </section>
          <section class="col-md-4 new_stories">
              <img src="images/SVWmug.png" alt="">
              <h2>
                  Student/Senior
              </h2>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
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
                      <input class="pure-input-1" id="membership-address" type="text" placeholder="Address">
                      <button type="submit" class="pure-button pure-button-primary">Join</button>
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
