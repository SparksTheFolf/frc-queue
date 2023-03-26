<?php 

include '../Header.php'; 

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

?>

<table class="tg">
<thead>
  <tr>
    <th class="tg-0pky">Match</th>
    <th class="tg-0lax">Start Time</th>
    <th class="tg-0lax">Red 1</th>
    <th class="tg-0lax">Red 2</th>
    <th class="tg-0lax">Red 3</th>
    <th class="tg-0lax">Blue 1</th>
    <th class="tg-0lax">Blue 2</th>
    <th class="tg-0lax">Blue 3</th>
    <th class="tg-0lax">Red Final</th>
    <th class="tg-0lax">Blue Final</th>
  </tr>
</thead>


<tbody>

<?php


foreach($final['Schedule'] as $Schedule){

  $output.="<tr>";

	$output.="<td class='tg-0lax'>".$Schedule['description']."</td>";
	$output.="<td class='tg-0lax'>".$Schedule['startTime']."</td>";

	foreach($Schedule['teams'] as $teams){

    $output.="<td class='tg-0lax'>".$teams['teamNumber'][1]."</td>";
    $output.="<td class='tg-0lax'>".$teams['teamNumber'][2]."</td>";


	}

  $output.="</tr>";


}

$output.="<br>";

$output.="</ul>";

echo $output;


?>

</tbody>
</table>

<br><br>

<a href="/schedule" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back</a>


<script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});
</script>



</body>
</html>