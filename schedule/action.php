<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php include '../Header.php'; ?>


    <button onclick="window.location.href='/schedule';">
      Go Back
    </button>  

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
echo $response;

?>


<script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});


</script>
</body>
</html>
