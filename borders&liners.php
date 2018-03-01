<?php require("helpers.php");?>

<?php renderHeader(["title" => "META MARBLE & GRANITE Borders & Liners"]);?>
	<!--prdt-starts-->
	<div class="pages" id="pages">
		<div class="container">
			<div class="col-md-12 typo-top heading">
				<h2 class="title">Borders & Liners Selection</h2>
				</div>
			</div>
			<div class="col-md-12 prdt-left" style="margin-top: 3em;">
<?php
require("connect-mysql.php");

$sqlget = "SELECT * FROM `Products` WHERE `Material`='Border' OR `Material`='Liner'";
$sqldata = mysqli_query($con, $sqlget);

while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {

    echo"<div class='col-md-3 product-left'>";
    echo"<a href='";
    echo $row['Path'];
    echo "'data-lightbox='Border & Liner'";
    echo "data-title='";
    echo $row['Name'];
    echo "'><img class='img-responsive zoom-img' src='";
    echo $row['Path'];
    echo "' alt='";
    echo $row['Name'];
    echo "'/></a>";
    echo "<div class='product-bottom'><h3>";
    echo $row['Name'];
    echo "</h3><p>";
    echo $row['Material'];
    echo "</p><h4>";
    echo $results['Category'];
    echo" </h4></div></div>";
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
