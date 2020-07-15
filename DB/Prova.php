<?php

require_once '../vendor/autoload.php';
require '../DB/DBConnectionManager.php';
require '../DB/DBSearchServices.php';


if (extension_loaded("mongodb")) {
    $db = new DBConnectionManager();
    $connection = $db->runConnection();
    //$connection->e("hypeBrand_db");

    //$item = $connection->selectCollection("hypeBrand_db", "item");

    //$cursor = $item->find();
// iterate cursor to display title of documents
    /*foreach ($cursor as $document) {
        echo $document["name"] . "\n";
    }*/

    $filter = [ 'color' => 'grey' ];
    //$options = [ 'projection' => ['_id' => 0] ];

    $query = new MongoDB\Driver\Query([]);
    $rows = $connection->executeQuery("hypeBrand_db.item", $query);

    try {
        foreach ($rows as $document) {
            var_dump($document);
        }
    } catch (MongoConnectionException $e) {
        var_dump($e);
    }
}
?>
