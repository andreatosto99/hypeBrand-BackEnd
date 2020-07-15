<?php
    require 'C:\xampp\htdocs\hypeBrand-BackEnd\vendor/autoload.php';
    class DBConnectionManager
    {
        private $connection;

        function runConnection()
        {
            $this->connection = new MongoDB\Driver\Manager("mongodb+srv://dbhypeStore:hype@hypebrand-pnp8s.mongodb.net/hypeBrand_db?retryWrites=true&w=majority");
            return $this->connection;
        }


    }

    ?>

