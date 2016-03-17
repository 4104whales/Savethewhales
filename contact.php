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
           Contact Save the Whales
        </h1>
    </div>
  
  <div class="row">
    <section class="col-xs-4 column-center">
          <h2>
               Message Us 
          </h2>
          <div>
          	<form class="subscribe">
          	  <div class="input-group">
                  <input type="text" class="form-control" placeholder="Name" >
                  <input type="email" class="form-control" placeholder="Email" >
                  <textarea class="form-control" placeholder="Your Message"></textarea>
       	      </div>
              <button type="button" class="btn btn-default">Submit</button>
            </form>
          </div>
      </section>
  </div>

    <div class="row">
      <section class="col-xs-4 staff-info">
          <h2 class="staff-name">
              Contact us
          </h2>
          <ul>
          	<li class="contact-info">
            	<a href="mailto:maris@savethewhales.org">maris@savethewhales.org</a>
            </li>
            <li class="contact-info">
            	(831) 899-9957
            </li>
            <li class="contact-info">
            	99 Pacific St. Suite 200D, Monterey, CA 93940
            </li>
            <li class="contact-info">
            	1192 Waring St., Seaside, CA 93955
            </li>
          </ul>
      </section>
      <section class="col-xs-8 staff-img">
          <img src="images/Carousel_Placeholder.png" alt="">
      </section>
    </div>
</div>
  
  <?php
      include "includes/footer.php";
  ?>

</body>
</html>
