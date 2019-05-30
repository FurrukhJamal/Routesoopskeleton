<?php
    //returns a database handle 
    class Connection
    {
        public static function make($config)
        {
            //$dsn = "mysql:host=localhost;dbname=oop-test";
            try
            {
                //return $dbh = new PDO($dsn, "root", "baadshah");

                return new PDO(
                    $config["connection"].";dbname=".$config["name"],
                    $config["username"],
                    $config["password"],
                    $config["options"]
                );
            }
            catch (PDOException $e)
            {
                print("could not connect to db" . $e->getMessage());
            }

        }
    }
 ?>
