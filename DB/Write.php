<?php

$bulk = new MongoDB\Driver\BulkWrite;

$document1 = ['_id' => 'nuteltino@gmail.com', 'name' => 'pippo', 'surname' => 'inzaghi','password' => '123456' ];

$_id1 = $bulk->insert($document1);

var_dump($_id1);

$manager = new MongoDB\Driver\Manager("mongodb+srv://dbhypeStore:hype@hypebrand-pnp8s.mongodb.net/hypeBrand_db?retryWrites=true&w=majority");
$result = $manager->executeBulkWrite('hypeBrand_db.user', $bulk);

?>
