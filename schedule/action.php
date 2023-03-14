<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<?php include '../Header.php'; ?> 

<?php


$number= $_GET['number'];
$code= $_GET['code'];
$level= $_GET['level'];
$frcCode = getenv('HTTP_frcBASIC');


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://frc-api.firstinspires.org/v3.0/2023/schedule/caoc?tournamentLevel=qual&teamNumber=4984&start=&end=',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'If-Modified-Since: ',
    'Authorization: Basic bm9sYW50MTA4OjY3REEyNkU4LUVDRDItNDczRi1CREE1LUFBOTA0MTZFNjk4Mg=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$final = json_encode($response);

foreach($final['Schedule'] as $Schedule){

	$output.="<h3>".$Schedule['description']."</h3>";
	$output.="<h5>".'Start Time: '.$Schedule['startTime']."</h5>";

	foreach($Schedule['teams'] as $teams){


	$output.="<li>".'Teams: '.$teams['teamNumber']."</li>";
	$output.="<li>".'Station: '.$teams['station']."</li>";
	
	

	}

}


?>

<br>

<?php echo $output; ?>
<br><br>
<a href="/schedule" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back</a>


<script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});


</script>
</body>
</html>
