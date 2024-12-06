<?php
    // Edel Sherratt October 2023
    // returns a PHP data object (PDO)
    
    require // path to cs25320_db_secrets.php

        /*
            Replace the code below with the path to your db_secrets.php file
            Do not put the file in a public space - below are some example of where to put it where they
            are not publicly accessible
        */

        //'/aber/eds/PHP/cs25320_db_secrets.php';  // Faculty Linux, also central, central is /aber/eds
    'db_secrets.php'; // Inf. services Windows, central is M:
        //'/home/Edel/central_eds/PHP/cs25320_db_secrets.php'; // hp-enfys, central is mounted at /home/Edelcentral_eds
        //'C:\Users\edels\db_secrets.php';
    function get_db_connection() {

        $data_source_name = DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME;

        try {

            return new PDO($data_source_name, DB_USER, DB_PASSWORD);

        } catch (PDOException $e) {

            // could do something more useful here
            echo "couldn't get a handle on the database ".$e."\n";
            return NULL;
        }
    }

