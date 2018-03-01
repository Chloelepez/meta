<?php require("helpers.php");?>

<?php renderHeader(["title" => "META MARBLE & GRANITE Engineerd Stones Slabs"]);?>
	<!--prdt-starts-->
	<div class="pages" id="pages">
		<div class="col-md-12 container">
			<div class="typo-top heading">
				<h2 class="title">Quartz Slabs Collection</h2>
				</div>

				<div class= "container" style="padding: 3em 3em 1em;"><h4>We are pleased to now offer engineerd stones in our slab warehouse.</h4>
        <h4>Quartz is a surfacing stone composed of 93% premium grade pure quartz and 7% high quality polyester resin.</h4>
		<h4>It has the look of natural stone but is twice as impact resistant and four times stronger.</h4>
		<h4>Other benefits include:</h4>
        <li>Color Consistency</p></li>
        <li>Slip Resistance</p></li>
        <li>Stain Resistance</p></li>
        <li>Scratch Resistance</p></li>
        <li>Acid Resistance</p></li>
        <li>Nonporous and Resists Bacterial Growth</p></li>
        <li>Easy Maintenance</p></li>
		</div>
			</div>
			<div class="col-md-12 prdt-left" style="margin-top: 3em;">
<?php
require("connect-mysql.php");

$sqlget = "SELECT * FROM Products WHERE `Material`='Quartz'";
$sqldata = mysqli_query($con, $sqlget);

while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {

    echo"<div class='col-md-3 product-left'>";
    echo"<a href='";
    echo $row['Path'];
    echo "'data-lightbox='Quartz Slabs'";
    echo "data-title='";
    echo $row['Name'];
    echo "'><img class='img-responsive zoom-img' src='";
    echo $row['Path'];
    echo "' alt='";
    echo $row['Name'];
    echo "'/></a>";
    echo "<div class='product-bottom'><h3>";
    echo $row['Name'];
    echo "</h3><p>Quartz</p><h4>Slab</h4>";
    echo"</div></div>";
}

?>
</div>
				<div class="clearfix"></div>
		</div>
	<!--product-end-->
	<div class="disclaimer">
	<h4>Stone is a product of nature; color and shade may vary. Please visit our Seattle location to reserve the material for your upcoming project.</h4>
	</div>
	<!--information-start-->

<?php renderFooter();?>
