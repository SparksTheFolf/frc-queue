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

$output.="<ul>";

foreach($final['Alliances'] as $Alliances){

	$output.="<h3>".$Alliances['name']."</h3>";


	$output.="<li>".'Captian: '.$Alliances['captain']."</li>";
	$output.="<li>".'Team 2: '.$Alliances['round1']."</li>";
  $output.="<li>".'Team 3: '.$Alliances['round2']."</li>";
	
	$output.="<br>";


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
