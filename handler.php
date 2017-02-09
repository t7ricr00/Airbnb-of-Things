<?php
$area = $_POST['area'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$pchoice = $_POST['price'];
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


while($item = mysqli_fetch_assoc($result)) {
    echo $item['itemid']; 
}

include('1.html');

?>