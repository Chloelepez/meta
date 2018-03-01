<?php require("helpers.php");?>
<?php renderHeader(["title" => "META MARBLE & GRANITE Homepage"]);?>
<!--banner-starts-->
	<div class="bnr" id="home">

		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<div class="banner"><img src="images/main.jpg" style="width: 100%" class="banner" alt="">
						<div class="gallerycon">
							<a href="slabs.php"><button class="ghost-button btnr">View our slabs</button></a>
							<a href="tiles.php"><button class="ghost-button">View our tiles</button></a>
      </div>
					</div>
				</li>
				<li>
					<div class="banner1"><img src="images/bedroom.jpg" style="width: 100%" class="banner" alt="">
						<div class="gallerycon">
							<a href="slabs.php"><button class="ghost-button btnr">View our slabs</button></a>
							<a href="tiles.php"><button class="ghost-button">View our tiles</button></a>
      </div>
					</div>
				</li>
				<li>
					<div class="banner2"><img src="images/bathroo.jpg" style="width: 100%" class="banner" alt="">
						<div class="gallerycon">
							<a href="slabs.php"><button class="ghost-button btnr">View our slabs</button></a>
							<a href="tiles.php"><button class="ghost-button">View our tiles</button></a>
      </div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
<!--banner-ends-->
<!--Slider-Starts-Here-->
<script src="js/responsiveslides.min.js"></script>
<script>
$(function () {
	$("#slider4").responsiveSlides({
		auto: true,
		pager: true,
		nav: true,
		speed: 500,
		namespace: "callbacks",
		before: function () {
			$('.events').append("<li>before event fired.</li>");
		},
		after: function () {
			$('.events').append("<li>after event fired.</li>");
		}
		});
	});
</script>
<!--End-slider-script-->
<!--about-starts-->
	<div class="container about">
			<div class="typo-top heading">
				<h2 class="title">Welcome to META Marble & Granite</h2>
				<h3>We invite you to visit our Seattle location and we look forward to working with you.</h3>
				<h4>Our warehouse offers a great selection of natural stone, and quartz slabs in a wide array of material and colors.<h4>
                <h4>Our tile building is located directly behind our slab warehouse and is easily accessible from our main showroom.</h4>
				<h4>We also offer a multitude of natural stone mosaics, liners, sinks, fireplaces, tables, and columns.</h4>
				<h4>Meta is pleased to announce that we now carry a selection of porcelain tiles.</h4>
				</div>
<!--about-end-->
<!--product-starts-->
	<div class="product">
	     <div>
			<div class="typo-top heading">
				<h2>Discover our favorites</h2>
			</div>
		 <div class="product-top">
		 	      <div class="col-md-3 product-home">
					<a href="images/Granite_Slab/TitaniumSelect.jpg"data-lightbox="home" data-title="Titanium Select">
						<img class="img-responsive zoom-img" src="images/Granite_Slab/TitaniumSelect.jpg"/></a>
						<div class="product-bottom">
							<h3>Titanium Select</h3>
							<p>Granite</p>
							<a href="slabs.php"><h4>Slab</h4></a>
						</div>
					</div>
					<div class="col-md-3 product-home">
						<a href="images/Marble_Slab/BlueCaymanLeather.jpg"data-lightbox="home" data-title="Blue Cayman ">
						<img class="img-responsive zoom-img" src="images/Marble_Slab/BlueCaymanLeather.jpg"/></a>
						<div class="product-bottom">
							<h3>Blue Cayman Leather</h3>
							<p>Marble</p>
							<a href="slabs.php"><h4>Slab</h4></a>
						</div>
					</div>
					<div class="col-md-3 product-home">
						<a href="images/Quartzite_Slab/BluePalamino.jpg"data-lightbox="home" data-title="Blue Palamino">
						<img class="img-responsive zoom-img" src="images/Quartzite_Slab/BluePalamino.jpg"/></a>
						<div class="product-bottom">
							<h3>Blue Palamino</h3>
							<p>Quartzite</p>
							<a href="slabs.php"><h4>Slab</h4></a>
						</div>
					</div>
				    <div class="col-md-3 product-home">
						<a href="images/Onyx_Slab/OnyxGrigio.jpg"data-lightbox="home" data-title="Onyx Grigio ">
						<img class="img-responsive zoom-img" src="images/Onyx_Slab/OnyxGrigio.jpg"/></a>
						<div class="product-bottom">
							<h3>Onyx Grigio</h3>
							<p>Onyx</p>
							<a href="slabs.php"><h4>Slab</h4></a>
						</div>
					</div>
					<div class="col-md-3 product-home">
						<a href="images/Marble_Tile/BiancoCarraraGioiaHoned.jpg"data-lightbox="home" data-title="Bianco Carrara Gioia">
						<img class="img-responsive zoom-img" src="images/Marble_Tile/BiancoCarraraGioiaHoned.jpg"/></a>
						<div class="product-bottom">
							<h3>Bianco Carrara Gioia</h3>
							<p>Marble</p>
							<a href="tiles.php"><h4>Tile</h4></a>
						</div>
					</div>
					<div class="col-md-3 product-home">
						<a href="images/Marble_Tile/HoneyOnyxA.jpg"data-lightbox="home" data-title="Honey Onyx">
						<img class="img-responsive zoom-img" src="images/Marble_Tile/HoneyOnyxA.jpg"/></a>
						<div class="product-bottom">
							<h3>Honey Onyx</h3>
							<p>Onyx</p>
							<a href="tiles.php"><h4>Tile</h4></a>
						</div>
					</div>
					<div class="col-md-3 product-home">
						<a href="images/Marble_Tile/CrystalWhite.jpg"data-lightbox="home" data-title="Crystal White">
						<img class="img-responsive zoom-img" src="images/Marble_Tile/CrystalWhite.jpg"/></a>
						<div class="product-bottom">
							<h3>Crystal White</h3>
							<p>Marble</p>
							<a href="tiles.php"><h4>Tile</h4></a>
						</div>
					</div>
					<div class="col-md-3 product-home">
						<a href="images/Trav_Tile/SilverHoned.jpg"data-lightbox="home" data-title="Silver Honed">
						<img class="img-responsive zoom-img" src="images/Trav_Tile/SilverHoned.jpg"/></a>
						<div class="product-bottom">
							<h3>Silver Honed</h3>
							<p>Travertine</p>
							<a href="tiles.php"><h4>Tile</h4></a>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
<!--product-end-->
<?php renderFooter();?>
