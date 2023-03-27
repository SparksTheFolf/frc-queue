<?php include '../Header.php'; ?> 


<?php


$code= $_GET['code'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://frc-api.firstinspires.org/v3.0/2023/alliances/'.$code,
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

$final = json_decode($response, true);

?>



<div class="mainDiv">

<div class="mainTable">

<table class="tg">
<thead>
  <tr>
    <th class="tg-0lax">Alliance 1</th>
    <th class="tg-0lax">Alliance 2</th>
    <th class="tg-0lax">Alliance 3</th>
    <th class="tg-0lax">Alliance 4</th>
    <th class="tg-0lax">Alliance 5</th>
    <th class="tg-0lax">Alliance 6</th>
    <th class="tg-0lax">Alliance 7</th>
    <th class="tg-0lax">Alliance 8</th>
  </tr>
</thead>


<tbody>

<?php

$output.="<ul>";

foreach($final['Alliances'] as $Alliances){

  $output.="<tr>";

  # Iterate thru each alliance and print out the team numbers with the team captain in bold and on top and each next two teams in order below

  if($Alliances['number'] == 1){
    $output.="<td class='tg-0lax'>".$Alliances['captian']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round1']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round2']."</td>";
  }
  if($Alliances['number'] == 2){
    $output.="<td class='tg-0lax'>".$Alliances['captian']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round1']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round2']."</td>";
  }  if($Alliances['number'] == 3){
    $output.="<td class='tg-0lax'>".$Alliances['captian']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round1']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round2']."</td>";
  }  if($Alliances['number'] == 4){
    $output.="<td class='tg-0lax'>".$Alliances['captian']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round1']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round2']."</td>";
  }  if($Alliances['number'] == 5){
    $output.="<td class='tg-0lax'>".$Alliances['captian']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round1']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round2']."</td>";
  }  if($Alliances['number'] == 6){
    $output.="<td class='tg-0lax'>".$Alliances['captian']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round1']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round2']."</td>";
  }
  if($Alliances['number'] == 7){
    $output.="<td class='tg-0lax'>".$Alliances['captian']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round1']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round2']."</td>";
  }
  if($Alliances['number'] == 8){
    $output.="<td class='tg-0lax'>".$Alliances['captian']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round1']."</td>";
    $output.="<td class='tg-0lax'>".$Alliances['round2']."</td>";
  }
}



echo $output;

?>

<br><br>

<a href="/alliance" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go Back</a>


<script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});
</script>



</body>
</html>
