<?php
	include "includes/head.php";
?>
<title>Contact Us | Save the Whales</title>
</head>

<body>

<div class="container-fluid">
	<?php
		include "includes/header.php";
    ?>
    <div class="row">
        <h1 class="tag-line column-center">
           Contact Us
        </h1>
    </div>
  
  <div class="row">
    <section class="col-xs-4 form-center">
          <form class="pure-form pure-form-stacked">
              <fieldset>
                  <input class="pure-input-1" id="contact-name" type="text" placeholder="Name"> 
                  <input class="pure-input-1" id="contact-email" type="email" placeholder="Email">
                  <textarea class="pure-input-1" id="contact-message" placeholder="Your Message"></textarea>
                  <button type="submit" class="pure-button pure-button-primary">Sign in</button>
              </fieldset>
          </form>
      </section>
  </div>

    <div class="row">
      <section class="col-xs-6 staff-info">
          <h2 class="staff-name">
              Other ways to contact the Save the Whales Organization are:
          </h2>
      </section>
    </div>
    <div class="row">
      <section class="col-xs-4 staff-info">
          <ul class="contact-info">
            <li id="contact-phone">
            	(831) 899-9957
            </li>
            <li id="contact-mailing">
            	1192 Waring St., Seaside, CA 93955
            </li>
            <h3 class="staff-name">
             	Make an appointment at our office:
          	</h3>
            <li id="contact-office">
            	99 Pacific St. Suite 200D, Monterey, CA 93940
            </li>

          </ul>
      </section>
      <section class="col-xs-8 contact-map">
          <img src="images/map-placeholder.png" alt="">
      </section>
    </div>
</div>
  
  <?php
      include "includes/footer.php";
  ?>

</body>
</html>
