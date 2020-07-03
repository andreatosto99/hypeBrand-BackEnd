<?php

    $mng = new MongoDB\Driver\Manager("mongodb+srv://dbhypeStore:hype@hypebrand-pnp8s.mongodb.net/hypeBrand_db?retryWrites=true&w=majority");

    $stats = new MongoDB\Driver\Command(["dbstats" => 1]);
    $res = $mng->executeCommand("phpbasics",$stats);

    $stats = current($res->toArray());

    print_r($stats);

    ?>
