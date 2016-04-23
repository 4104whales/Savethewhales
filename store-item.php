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
                     Save the Whales Store
                </h1>
                <p>
                     Proceeds from sale of merchandise will go to funding our Save the Whales education programs.
                </p>
        </section>
    </div>
        
		<?php
             if (isset($_GET["itemName"]) && !empty($_GET["itemName"])) {
                 $selected_item = $_GET['itemName'];
             }else{  
                 $selected_item = 'No item selected';
             }
			 
			switch ($selected_item) {
			case "Turtle Earrings":
				 $itemImg = 'images/turtleEarings.jpg';
				break;
			case "Save The Whales KeyChain":
				$itemImg = 'images/STW-KeyChain_1.gif';
				break;
			case "Whale Tail Necklace":
				$itemImg = 'images/whaleTailpsd.jpg';
				break;
			case "Splash!":
				$itemImg = 'images/Splash.jpg';
				break;
			case "Sea Turtle Plushie":
				$itemImg = 'images/SASeaTurtle_1.jpg';
				break;		
			case "Dolphin Charm Bracelet":
				$itemImg = 'images/netbracelet.jpg';
				break;
			case "Dolphin Plushie":
				$itemImg = 'images/SADolphin.jpg';
				break;
			case "Polar Bear Plushie":
				$itemImg = 'images/SAPolarBear.jpg';
				break;
			case "Sea Lion Plushie":
				$itemImg = 'images/SASeaLion.jpg';
				break;
			default:
				echo "Your favorite color is neither red, blue, nor green!";
		}
        ?>
        <div class="row items">
           <img src="<?php echo $itemImg ?>" alt="" class="col-md-4 col-md-offset-1 itemImg">
           <section class="col-md-6 item-info">
              <h2>
                 	<?php
                 		echo $selected_item;
					?>
              </h2>
              <div class="rating">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
              </div>
              <h4 class="price">
                  $24.00
              </h4>
              <div class="add-cart">
              		Qty:
                  <select>
                  	<option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
              <button class="cart-button">
                Add to cart
              </button>
          </section>
          <section class="col-md-6 item-desc">
              <h3>
                 Item Description
              </h3>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.
              </p>
          </section>
        </div>
    </div>
  
  <?php
      include "includes/footer.php";
  ?>

</body>
</html>