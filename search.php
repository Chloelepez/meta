<?php require("helpers.php");?>

<?php renderHeader(["title" => "META MARBLE & GRANITE Search"]);?>


	<!--company-starts-->
	<div class="pages" id="pages">
		<div class="container" style="padding-bottom: 3em;">
			<div class="typo-top heading">
				<h2 style="padding-bottom: 1.5em;" class="title">Search Result</h2>
			</div>
<?php
    mysql_connect("mysql-metamarble.metamarblegranite.qwestoffice.net","meta410","Mermer1989","metamarble") or die("Error connecting to database: ".mysql_error());


    mysql_select_db("metamarble") or die(mysql_error());

?>

<?php
    $query = $_GET['query'];
    // gets value sent over search form

    $min_length = 3;
    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

        $query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;

        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
       $raw_results = mysql_query("SELECT * FROM Products
            WHERE (`Name` LIKE '%".$query."%') OR (`Material` LIKE '%".$query."%') ") or die(mysql_error());

        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysql_fetch_array($raw_results)){

    echo"<div class='col-md-3 product-left'>";
    echo"<a href='";
    echo $results['Path'];
    echo "'data-lightbox='Search'";
    echo "data-title='";
    echo $results['Name'];
    echo "'><img class='img-responsive zoom-img' style='width='500' height='400'' src='";
    echo $results['Path'];
    echo "' alt='";
    echo $results['Name'];
    echo "'/></a>";
    echo "<div class='product-bottom'><h3>";
    echo $results['Name'];
    echo "</h3><p>";
    echo $row['Size'];
    echo "</p><p>";
    echo $row['Finish'];
    echo "</p><p>";
    echo $results ['Material'];
    echo "</p><h4>";
    echo $results['Category'];
    echo" </h4></div></div>";
            }

        }
        else{ // if there is no matching rows do following
            echo"<h3 class='typo-top heading'>No results</h3>";
        }

    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
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
