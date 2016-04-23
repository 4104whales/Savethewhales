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
				 $itemDesc = 'Sterling silver post-earrings with sterling backs. Measure 1/2" in length. Nicely detailed.
Made in USA.';
				$itemPrice = '$11.99';
				break;
			case "Save The Whales KeyChain":
				$itemImg = 'images/STW-KeyChain_1.gif';
				$itemDesc = 'This attractive key ring celebrates the many years Save The Whales has been educating
children and adults about marine mammals, their environment and their preservation.
Stainless steel key ring made in the USA with sturdy key holder.
1-1/8" wide by 1-7/8" long';
				$itemPrice = '$9.99';
				break;
			case "Whale Tail Necklace":
				$itemImg = 'images/whaleTailpsd.jpg';
				$itemDesc = 'Sterling silver 3-D tail measures 3/4" with hidden loop and delicate scalloped edging. Made in USA. ';
				$itemPrice = '$12.95';
				break;
			case "Splash!":
				$itemImg = 'images/Splash.jpg';
				$itemDesc = 'Award winning game for ages 5 and up. For 3-6 players. A fast-paced passing of sea creature cards. Match up 4 and “jump” in to grab a squeaky dolphin. There’s one less dolphin than players, so be quick. Fun facts on each card. Teaches matching skills.';
				$itemPrice = '$14.75';
				break;
			case "Sea Turtle Plushie":
				$itemImg = 'images/SASeaTurtle_1.jpg';
				$itemDesc = '9 inch Sea Turtle ';
				$itemPrice = '$12.00';
				break;		
			case "Dolphin Charm Bracelet":
				$itemImg = 'images/netbracelet.jpg';
				$itemDesc = 'These unique hand-crafted bracelets are made from recycled ocean nets by the Ocean Net Works in the U.S. Discarded pieces of fishing nets left in the ocean can kill and entangle sea mammals and sea turtles.

Ocean Net Works purchases the nets, cleans them and transforms them into wearable jewelry. Not only does this gift recycle, it helps protects ocean animals and the products are made in the U.S. ';
				$itemPrice = 'OUT OF STOCK';
				break;
			case "Dolphin Plushie":
				$itemImg = 'images/SADolphin.jpg';
				$itemDesc = '14 inch Dolphin ';
				$itemPrice = '$12.00';
				break;
			case "Polar Bear Plushie":
				$itemImg = 'images/SAPolarBear.jpg';
				$itemDesc = '8 inch Polar Bear';
				$itemPrice = '$12.00';
				break;
			case "Sea Lion Plushie":
				$itemImg = 'images/SASeaLion.jpg';
				$itemDesc = '8 inch Velvet Sea Lion';
				$itemPrice = '$6.50';
				break;
			default:
				$itemImg = '';
				$itemDesc = 'No item selected';
				$itemPrice = '';
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
                  <?php
				  	echo $itemPrice;
				  ?>
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
                  <?php
                 		echo $itemDesc;
					?>
              </p>
          </section>
        </div>
    </div>
  
  <?php
      include "includes/footer.php";
  ?>

</body>
</html>