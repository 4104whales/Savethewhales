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


  <div class="row spacing">

    <section class="col-md-4 col-md-offset-4">
        <h1 class="page-title">
           Contact Us
        </h1>
          <form class="pure-form pure-form-stacked">
              <fieldset>
                  <input class="pure-input-1" id="contact-name" type="text" placeholder="Name">
                  <input class="pure-input-1" id="contact-email" type="email" placeholder="Email">
                  <textarea class="pure-input-1" id="contact-message" placeholder="Your Message"></textarea>
                  <button type="submit" class="pure-button pure-button-primary">Submit</button>
              </fieldset>
          </form>
      </section>
  </div>


    <div class="row spacing">
      <section class="col-md-5 col-md-offset-1 staff-info">
          <h2 class="staff-name">
              Other ways to contact the Save the Whales
          </h2>
          <ul class="contact-info">
            <li id="contact-phone">
            	<a href="tel:8318999957"><span class="contactText">(831)899-9957</span></a>
            </li>
            <li id="contact-mailing">
            	<span class="contactText">1192 Waring St., Seaside, CA 93955</span>
            </li>
        </ul>
        <h2 class="staff-name">
            Make an appointment at our office:
        </h2>
        <ul class="contact-info">

            <li id="contact-office">
            	<span class="contactText">99 Pacific St. Suite 200D, Monterey, CA 93940</span>
            </li>

          </ul>
      </section>
      <section class="col-md-6 contact-map">
          <iframe width="600" height="450" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q=ucf&key=AIzaSyDKeT9Mt48mPHCH4ivua0Ii5pMBPgxAwZ8" allowfullscreen></iframe>
      </section>
    </div>
</div>

  <?php
      include "includes/footer.php";
  ?>

</body>
</html>
