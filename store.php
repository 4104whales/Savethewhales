<?php
	include "includes/head.php";
?>
<title>Store | Save the Whales</title>
</head>

<body>

<div class="container-fluid">
      <?php
          include "includes/header.php";
      ?>
      
      <div class="row">
          <section class="col-md-12 page-title">
                <h1>
                     Our Store
                </h1>
                <h3>
                     Proceeds from sale of merchandise will go to funding<br> our Save the Whales education programs. 
                </h3>
        </section>
  </div>
        
        <div class="row store-items">
          <section class="col-md-4">
          	<form action="store-item.php" method="GET">
               <button name="itemName" value="Turtle Earrings">
                  <img src="images/turtleEarings.jpg" alt="Turtle Earrings">
                  <h3>
                        Turtle Earrings
                  </h3>
                  <h4>
                      $24.00
                  </h4>
              </button>
            </form>
          </section>
          <section class="col-md-4">
          	<form action="store-item.php" method="GET">
               <button name="itemName" value="Save The Whales KeyChain">
                  <img src="images/STW-KeyChain_1.gif" alt="">
                  <h3>
                     Official Save the Whales Keychain
                  </h3>
                  <h4>
                      $24.00
                  </h4>
              </button>
            </form>
          </section>
          <section class="col-md-4">
              <form action="store-item.php" method="GET">
                   <button name="itemName" value="Whale Tail Necklace">
                       <img src="images/whaleTailpsd.jpg" alt="">
                      <h3>
                         Whale Tail Necklace
                      </h3>
                      <h4>
                          $24.00
                      </h4>
                  </button>
              </form>
          </section>
        </div>
        
        <div class="row store-items">
          <section class="col-md-4">
              <form action="store-item.php" method="GET">
                   <button name="itemName" value="Splash!">
                       <img src="images/Splash.jpg" alt="">
                      <h3>
                         Splash! 
                      </h3>
                      <h4>
                          $24.00
                      </h4>
                  </button>
              </form>
          </section>
          <section class="col-md-4">
              <form action="store-item.php" method="GET">
                   <button name="itemName" value="Sea Turtle Plushie">
                   <img src="images/SASeaTurtle_1.jpg" alt="">
                      <h3>
                         Sea Turtle Plushie
                      </h3>
                      <h4>
                          $24.00
                      </h4>
                  </button>
              </form>
          </section>
          <section class="col-md-4">
              <form action="store-item.php" method="GET">
                   <button name="itemName" value="Dolphin Charm Bracelet">
                   <img src="images/netbracelet.jpg" alt="">
                      <h3>
                         Dolphin Charm Bracelet
                      </h3>
                      <h4>
                          $24.00
                      </h4>
                  </button>
              </form>
          </section>
        </div>
        
  <div class="row store-items">
          <section class="col-md-4">
              <form action="store-item.php" method="GET">
                   <button name="itemName" value="Dolphin Plushie">
                   <img src="images/SADolphin.jpg" alt="">
                      <h3>
                         Dolphin Plushie
                      </h3>
                      <h4>
                          $24.00
                      </h4>
                  </button>
              </form>
          </section>
          <section class="col-md-4">
              <form action="store-item.php" method="GET">
                   <button name="itemName" value="Polar Bear Plushie">
                   <img src="images/SAPolarBear.jpg" alt="">
                      <h3>
                         Polar Bear Plushie
                      </h3>
                      <h4>
                          $24.00
                      </h4>
                  </button>
              </form>
          </section>
          <section class="col-md-4">
              <form action="store-item.php" method="GET">
                   <button name="itemName" value="Sea Lion Plushie">
                   <img src="images/SASeaLion.jpg" alt="">
                      <h3>
                         Sea Lion Plushie
                      </h3>
                      <h4>
                          $24.00
                      </h4>
                  </button>
              </form>
          </section>
        </div>
</div>
  
  <?php
      include "includes/footer.php";
  ?>

</body>
</html>
