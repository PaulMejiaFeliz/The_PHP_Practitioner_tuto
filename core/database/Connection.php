<?php

class Connection
{
    public static function make($config){
        try
        {
            return new PDO(
                "{$config["connection"]};dbname={$config["dbName"]};",
                $config["user"],
                $config["password"]
            );
        }
        catch(PDOException $e)
        {
            die("Couldn't connect!");
        }
    }
}