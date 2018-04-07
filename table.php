<?php

require_once "vendor/cloudant-master/lib/couch.php";
require_once "vendor/cloudant-master/lib/couchClient.php";
require_once "vendor/cloudant-master/lib/couchDocument.php";


$couch_dsn = "https://3e6d30ee-d974-4ed8-a6b7-1504c9b01df6-bluemix:72d189c906f2630a7793ac0918894d55ed07904548da1ca6ae4f274cacf7aa00@3e6d30ee-d974-4ed8-a6b7-1504c9b01df6-bluemix.cloudant.com";
$couch_db = "codefest-info";

$client = new couchClient($couch_dsn,$couch_db);

try {
    $client->createDatabase();
} catch(Exception $e) {
    
}

$db_info = $client->getDatabaseInfos();
$central = $client->getDoc("59b03acc7eedb2b21639ff88f15a671e");
$grundle = $client->getDoc("089061c18a884da9a718b16b76807712");
$redstone = $client->getDoc("adacffdef0cb95cf0298fb6a0ed983fd");

$central_total = $central->currentTotal;
$grundle_total = $grundle->currentTotal;
$redstone_total = $redstone->currentTotal;

$central_capacity = $central->capacity;
$grundle_capacity = $grundle->capacity;
$redstone_capacity = $redstone->capacity;

$central_name = $central->diningHall;
$grundle_name = $grundle->diningHall;
$redstone_name = $redstone->diningHall;


?>
