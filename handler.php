<?php
$area = $_POST['area'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$pchoice = $_POST['price'];
$name = $_POST['name'];
switch($pchoice)
{
	case '1':
	$query = "SELECT * from items WHERE area = '".$area."' AND priceperday < 10";
	break;
	
	case '2':
	$query = "SELECT * from items WHERE (area = '".$area."') AND (priceperday BETWEEN 10 AND 30)";
	break;
	
	case '3':
	$query = "SELECT * from items WHERE (area = '".$area."') AND (priceperday BETWEEN 31 AND 50)";
	break;
	
	case '4':
	$query = "SELECT * from items WHERE (area = '".$area."') AND (priceperday BETWEEN 51 AND 100)";
	break;
	
	case '5':
	$query = "SELECT * from items WHERE area = '".$area."' AND priceperday > 100";
	break;
}
//echo $area."<br>".$date1."<br>".$date2."<br>".$pchoice."<br>";
//echo $query."<br>";

//include('1.html');

$link = mysqli_connect('localhost','root','root','airbnbofthings');


$result = mysqli_query($link,$query);
if (!$result) {
        echo 'MySQL Error: ' . mysqli_error();
        exit;
    }

$num_of_results = 0;
while($item = mysqli_fetch_assoc($result)) {
	$num_of_results = $num_of_results + 1;
    //echo $item['itemid']; 
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
    $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
  <style>
		  @import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

		.container { margin-top: 20px; }
		.mb20 { margin-bottom: 20px; } 

		hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
		hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
		hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }

		.search-result .thumbnail { border-radius: 0 !important; }
		.search-result:first-child { margin-top: 0 !important; }
		.search-result { margin-top: 20px; }
		.search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
		.search-result ul { padding-left: 0 !important; list-style: none;  }
		.search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
		.search-result ul li i { padding-right: 5px; }
		.search-result .col-md-7 { position: relative; }
		.search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
		.search-result h3 > a, .search-result i { color: #248dc1 !important; }
		.search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 
		.search-result span.plus { position: absolute; right: 0; top: 126px; }
		.search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
		.search-result span.plus a:hover { background-color: #414141; }
		.search-result span.plus a i { color: #fff !important; }
		.search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }
</style>
  
  </head>
  <body>
  <div class="container">

    <hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger"><?php echo $num_of_results; ?></strong> results were found for the search for <strong class="text-danger"><?php echo $name;?></strong></h2>								
	</hgroup>

    <section class="col-xs-12 col-sm-6 col-md-12">
	
	<?php
	$link = mysqli_connect('localhost','root','root','airbnbofthings');


	$result = mysqli_query($link,$query);
	if (!$result) {
        echo 'MySQL Error: ' . mysqli_error();
        exit;
    }
	
	while($item = mysqli_fetch_assoc($result)) {
		//$num_of_results = $num_of_results + 1;
		
	
	
		$id = $item['itemid']; 
		include('item.php');
	}
	?>


 

	

	</section>
</div>
 
  </body>
</html>