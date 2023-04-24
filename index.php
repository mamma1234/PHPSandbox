<?php
    echo "Welcome to PHPSandbox";

$extraRates = [];
// array_push($extraRates, ["위험물, 유독물, 유해화학물질" => "30"]);
// array_push($extraRates, ["냉동 컨테이너" => "15"]);
// array_push($extraRates, ["심야 (22:00 - 06:00)" => "30"]);
// array_push($extraRates, ["일요일 및 공휴일" => "15"]);

$extraRates["위험물, 유독물, 유해화학물질"] = 30;
$extraRates["냉동 컨테이너"] = 15;
$extraRates["심야 (22:00 - 06:00)"] = 15;
$extraRates["일요일 및 공휴일"] = 30;

//array_push($extraRates, "일요일 및 공휴일" => "15");

echo json_encode($extraRates)."\n";

rsort($extraRates);


echo json_encode($extraRates)."\n";

$weightsRate = $extraRates[0] ?? 0 ;
for ($i = 1; $i < count($extraRates); $i++) {
$weightsRate += ($extraRates[$i] / 2);
}

echo $weightsRate . "\n";


//  $fruits = array("위험물, 유독물, 유해화학물질" => "30", "냉동 컨테이너" => "15", "심야 (22:00 - 06:00)" => "15", "일요일 및 공휴일" => "30");
 
//  foreach ($fruits as $key => $val) {
//    echo "$key = $val\n";
//  }

//  echo json_encode($fruits)."\n";

//  rsort($fruits);

// // echo( $fruits );
// $weightsRate = $fruits[0];
// for ($i = 1; $i < count($fruits); $i++) {
//      $weightsRate += ($fruits[$i] / 2);
// }

// echo $weightsRate . "\n";
 
//  foreach ($fruits as $key => $val) {
//    echo "$key = $val\n";
//  }

// $loadCoor =1;



// echo $loadCoor;

$signature = utf8_encode('6gQEQ6GDW1eTeiZ5sQ5ldeN6fF5VGX2022122211111111/gw/gw050A02');
echo $signature;
echo "-----------------";
$test = hash("sha256", $signature);
echo $test;
echo "-----------------";
$test = base64_encode($test);
echo $test;