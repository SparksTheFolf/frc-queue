<?php 

include '../Header.php'; ?>




<?php

$number= $_GET['number'];
$code= $_GET['code'];
$level= $_GET['level'];

$frcCode = getenv('FRCCODE');

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://frc-api.firstinspires.org/v3.0/2023/schedule/'.$code.'?tournamentLevel='.$level.'&teamNumber='.$number,
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

curl_close($curl);

$final = json_decode($response, true);

$output.="<ul>";

foreach($final['Schedule'] as $Schedule){

	$output.="<h3>".$Schedule['description']."</h3>";
	$output.="<h5>".'Start Time: '.$Schedule['startTime']."</h5>";

	foreach($Schedule['teams'] as $teams){

	$output.="<li>".'Teams: '.$teams['teamNumber']."</li>";
	$output.="<li>".'Station: '.$teams['station']."</li>";
	
	

	}

}

$output.="<br>";

$output.="</ul>";

echo $output;


?>



<br><br>

<a href="/schedule" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back</a>


<script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});


</script>



</body>
</html>