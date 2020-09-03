<?php
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"]; 

for($i=0; $i < count($klas); $i++){
	echo $klas[$i].PHP_EOL;
}

foreach($klas as $element){
	echo $element.PHP_EOL;
}

$bucketlist = [];
$amount_activities = readline('How many activities would you like on your bucketlist?');
for($i=0; $i < $amount_activities; $i++){
	array_push($bucketlist, readline(' What activity would you like to add?'));
}
print_r($bucketlist);
