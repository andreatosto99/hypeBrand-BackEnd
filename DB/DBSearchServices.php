<?php
class DBSearchServices
{
    private $connection;

    private $tabelleDB = [ //Array delle tabelle
        "user",
        "item",
        "order",
        "store"
    ];

    private $campiTabelleDB = [ //Campi delle tabelle (array bidimensionale indicizzato con key)
        "user" => [
            "_id",
            "name",
            "surname",
            "password",
            "order" => [].["id"]
        ],

        "item" => [
            "_id",
            "name",
            "color",
            "gender",
            "tags" => [],
            "price"
        ],

        "order" => [
            "_id",
            "orderItems" => [].["sku", "size", "price"],
            "email",
            "address",
            "billing method",
            "orderDate"
        ],

        "store" => [
            "_id",
            "item" => [].["sku"]."size".[].["n°","quantity"]
        ]
    ];

    public function __construct()
    {

        //Setup della connessione con il DB
        $db = new DBConnectionManager();
        $this->connection = $db->runConnection();
        $this->connection->selectDatabase("hypeBrand_db");
    }

    public function printCollectionItem(){
        //select collection
        $item = $this->connection->selectCollection("item");

        $cursor = $item->find();
        // iterate cursor to display title of documents
        foreach ($cursor as $document) {
            echo $document["name"] . "\n";
        }
    }

}
    ?>

