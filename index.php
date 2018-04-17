<?php

require __DIR__ . '/vendor/autoload.php';

use TimeMachine\src\TimeMachine;


$date = new \DateTime('2017-04-25 12:15:00');

$var = TimeMachine::getDateTime('America/New_York');

var_dump($var);

$timezone = 'Europe/Madid';

if (in_array($timezone , timezone_identifiers_list())) {
	$timezone = new \DateTimeZone($timezone);
	echo "sí";
} else {
	echo "ní";
	$timezone = new \DateTimeZone(date_default_timezone_get());
}

echo "<br>";
$date = new \DateTime('now', $timezone);
var_dump($date);


//$var = TimeMachine::arrayIntervaloHoras('10:50', '12:30', '30');



// echo "<br>";
// $timezone = new DateTimeZone('Europe/London');
// $var = new DateTime('now', $timezone); //datetime object is on New York time
// var_dump($var);

// echo "<br>";
// $timezone = new DateTimeZone('America/New_York');
// $var = new DateTime('now', $timezone); //datetime object is on New York time
// var_dump($var);

// echo "<br>";
// $timezone = new DateTimeZone('Europe/Madrid');
// $var = new DateTime('now', $timezone); //datetime object is on New York time
// var_dump($var);



// $var = new DateTime('now', $timezone); //datetime object is on New York time






// echo "<br>";
// $a1 = timezone_identifiers_list();
// //var_dump($a1);
// foreach ($a1 as $key => $value) {
// 	echo $value."<br>";
// }


// //var_dump(createTZList2());

// foreach(timezone_abbreviations_list() as $abbr => $timezone){
//         foreach($timezone as $val){
//                 if(isset($val['timezone_id'])){
//                         var_dump($abbr,$val['timezone_id']);
//                         echo "<br>";
//                 }
//         }
// }


// function createTZList2() {
//   $out = array();
//   $tza = timezone_abbreviations_list();
//   foreach ($tza as $zone)
//     foreach ($zone as $item)
//       $out[$item['timezone_id']] = 1;
//   unset($out['']);
//   ksort($out);
//   return array_keys($out);
// }