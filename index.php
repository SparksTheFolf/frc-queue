<!DOCTYPE html>
<html>
<head>
<title>FRC Queue</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<h2>Week 3</h2>

<?php include 'Header.php'; ?>


<?php


$frcCode = getenv('FRCCODE');

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://frc-api.firstinspires.org/v3.0/2023/events?weekNumber=3&tournamentType=Regional',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'If-Modified-Since: ',
    'Authorization: Basic '.$frcCode
  ),
));

$response = curl_exec($curl);


$final = json_decode($response, true);

$output.="<ul>";

foreach($final['Events'] as $Events){

	$output.="<h3>".$Events['name']."</h3>";
  $output.="<h5>"."Event Code: ".$Events['code']."</h5>";
  $output.="<li>".'Code Type: '.$Events['type']."</li>";
	$output.="<li>".'Date Start: '.$Events['dateStart']."</li>";
	$output.="<li>".'Date End: '.$Events['dateEnd']."</li>";
  $output.="<li>".'Location: '.$Events['venue']."</li>";
  
  $output.="<br>";

  foreach($Events['webcasts'] as $webcasts){

    $output.="<li>".'Webcast: <a href='.$webcasts." > Here </a> </li>";    
  
    }
    $output.="<br>";


$output.="<li>"."View The Qual Schedule: <a href='https://frc-queue.wuffs.net/schedule/action.php?code=".$Events['code']."&level=qual' > Here </a> </li>";
$output.="<li>"."View The Playoff's Schedule: <a href='https://frc-queue.wuffs.net/schedule/action.php?code=".$Events['code']."&level=playoff' > Here </a> </li>";

$output.="<br>";
$output.="<br>";
}

$output.="<br>";

$output.="</ul>";

echo $output;


?>


<script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});
</script>


</body>
</html>
