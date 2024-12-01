<?php

function get_connection(){
    $dsn = DB_TYPE.':dbname='.DB_NAME.';host='.DB_HOST;
    $user = DB_USER;
    $password = DB_PASS;
    
    $connection = new PDO($dsn, $user, $password);
    return $connection;
}
function select($query, $row_base = FALSE, $params = []){
    $connection = get_connection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);
    
    $result = [];
    if($success === TRUE){
        if($row_base === FALSE){
        $result = $statement->fetchAll();
        }
        else{
            $result = $statement->fetch();
        }
    }
    else{
        die('Incorrect process');
    }
    
    $statement->closeCursor();
    $connection = null;
    
    return $result;
}
function executeStatement($query, $params = []){
    $connection = get_connection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);
    
    
    $statement->closeCursor();
    $connection = null;
    
    return $success;
}