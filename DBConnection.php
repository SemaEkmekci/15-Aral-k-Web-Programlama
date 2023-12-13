<?php
try{
    $dbConnection = new PDO("mysql:host=localhost; dbname=neu", "root", "123456789");
    echo "calisti";
}
catch(Exception $e)
{
    echo  "bb";
    $dbConnection =null;
}

?>