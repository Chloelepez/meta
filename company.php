<?php require("helpers.php");?>

<?php renderHeader(["title" => "META MARBLE & GRANITE Company"]);?>



<!--company-starts-->
<div class="pages" id="pages">
	<div class="container">
		<div class="contact-top heading">
			<h2 class="title">COMPANY</h2>
			</div>

      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li data-thumb="images/Photogallery/metaback.jpg">
  	    	    <img src="images/Photogallery/metaback.jpg" />
  	    		</li>
  	    		<li data-thumb="images/Photogallery/photo1.jpg">
  	    	    <img src="images/Photogallery/photo1.jpg" />
  	    		</li>
  	    		<li data-thumb="images/Photogallery/Slideshow3.jpg">
  	    	    <img src="images/Photogallery/Slideshow3.jpg" />
  	    		</li>
  	    		<li data-thumb="images/Photogallery/slideshow6.jpg">
  	    	    <img src="images/Photogallery/slideshow6.jpg" />
  	    		</li>
				<li data-thumb src="images/Photogallery/slideshow7.jpg" >
				<img src="images/Photogallery/slideshow7.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow8.jpg" >
				<img src="images/Photogallery/slideshow8.jpg"/>
				</li>
				<li data-thumb src="images/Photogallery/slideshow9.jpg" >
				<img src="images/Photogallery/slideshow9.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow10.jpg" >
				<img src="images/Photogallery/slideshow10.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow11.jpg" >
				<img src="images/Photogallery/slideshow11.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow12.jpg" >
				<img src="images/Photogallery/slideshow12.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow13.jpg" >
				<img src="images/Photogallery/slideshow13.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow14.jpg" >
				<img src="images/Photogallery/slideshow14.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow15.jpg" >
				<img src="images/Photogallery/slideshow15.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow16.jpg" >
				<img src="images/Photogallery/slideshow16.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow17.jpg" >
				<img src="images/Photogallery/slideshow17.jpg" />
				</li>
				<li data-thumb src="images/Photogallery/slideshow19.jpg" >
				<img src="images/Photogallery/slideshow19.jpg" />
				</li>
          </ul>
        </div>
      </section>

	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


	<div class="typo-bottom left" >
		<h4>Meta Marble & Granite has been operating in Seattle since 1989, a pioneer in the local stone industry. Since then, we have become one of the largest importers and wholesalers of natural stone in our region. We are proud to have earned our reputation for providing the absolute best customer service and quality products available in our industry. Our staff is experienced, attentive, sincere and knowledgeable, creating an atmosphere that is customer-focused and comfortable.</h4>
        <h4>We import stone from numerous leading sources around the globe, including Italy, Brazil, India, Turkey, Spain and many other international suppliers.</h4>
        <h4>Meta's combination of the finest service, established sources, and selection of the best quality products provides our customers with the best advantages for creating projects of the highest quality, durability and beauty. We have the resources, connections and knowledge needed to provide you with the best service and products at competitive prices.</h4>
        <h4>We invite you to visit our Seattle location and we look forward to working with you.</h4>
	</div>

	</div>
</div>
<?php renderFooter();?>
