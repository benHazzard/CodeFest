<?php
/*
 * Copyright IBM Corp. 2016
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require 'vendor/autoload.php';

require_once "vendor/cloudant-master/lib/couch.php";
require_once "vendor/cloudant-master/lib/couchClient.php";
require_once "vendor/cloudant-master/lib/couchDocument.php";


### ANON DSN
$couch_dsn = "https://3e6d30ee-d974-4ed8-a6b7-1504c9b01df6-bluemix:72d189c906f2630a7793ac0918894d55ed07904548da1ca6ae4f274cacf7aa00@3e6d30ee-d974-4ed8-a6b7-1504c9b01df6-bluemix.cloudant.com";
### AUTHENTICATED DSN
### $couch_dsn = "http://user:password@localhost:5984/"
$couch_db = "codefest-info";


/**
* create the client
*/
$client = new couchClient($couch_dsn,$couch_db);

try {
    $client->createDatabase();
} catch(Exception $e) {
    echo "Database already exists!";
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


<thead>
<tr>
  <th scope="col">Dining Hall</th>
  <th scope="col">Current Population</th>
  <th scope="col">Capacity</th>
</tr>
</thead>
<tbody>
<tr>
  <th scope="row"><?php echo $central_name; ?></th>
  <td><?php echo $central_total; ?></td>
  <td><?php echo $central_capacity; ?></td>
</tr>
<tr>
  <th scope="row"><?php echo $grundle_name; ?></th>
  <td><?php echo $grundle_total; ?></td>
  <td><?php echo $grundle_capacity; ?></td>
</tr>
<tr>
  <th scope="row"><?php echo $redstone_name; ?></th>
  <td><?php echo $redstone_total; ?></td>
  <td><?php echo $redstone_capacity; ?></td>
</tr>
</tbody>