<html>
<head>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>

<title>Match Schedule</title>

</head>
<body>

<?php 

include '../Header.php'; 

$number= $_GET['number'];
$code= $_GET['code'];
$level= $_GET['level'];

$frcCode = getenv('FRCCODE');

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://frc-api.firstinspires.org/v3.0/2023/matches/'.$code.'?tournamentLevel='.$level.'&teamNumber='.$number,
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


?>

<table class="tg">
<thead>
  <tr>
    <th class="tg-0pky">Match</th>
    <th class="tg-0lax">Video Link</th>
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


foreach($final['Matches'] as $Schedule){

  $output.="<tr>";

	$output.="<td class='tg-0lax'><a href='/matchResults/action.php?code=".$code."&level=".$level."&match=".$Schedule['matchNumber']."'>".$Schedule['description']."</a></td>";

  if($Schedule['matchVideoLink'] == null || $Schedule['matchVideoLink'] == 'null'){
    $output.="<td class='tg-0lax'>No Video</td>";
  }
  else{
    $output.="<td class='tg-0lax'><a href='".$Schedule['matchVideoLink']."'>Match ".$Schedule['matchNumber']." Video</a></td>";
  }

	$output.="<td class='tg-0lax'>".$Schedule['actualStartTime']."</td>";

	foreach($Schedule['teams'] as $teams){
    $output .= "<td class='tg-0lax'>";
    if($teams['teamNumber'] != 0){
      $output .= "<a href='/teams/action.php?number=".$teams['teamNumber']."'>".$teams['teamNumber']."</a>";
    }
    $output .= "</td>";
}

  

  }

  $output.="<td class='tg-0lax'>".$Schedule['scoreRedFinal']."</td>";
  $output.="<td class='tg-0lax'>".$Schedule['scoreBlueFinal']."</td>";

}


$output.="</tr>";
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