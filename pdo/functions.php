<?php

function connectToDb(){
    try{
        return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');
    } catch(PDOException $e){
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo){
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    // var_dump($statement->fetchAll(PDO::FETCH_OBJ)); //getting all the element from the todos table without the duplication

    //$task = $statement->fetchAll(PDO::FETCH_OBJ);   //without classes included

    // var_dump($results[2]->description); //getting the description which i found on the index of 2

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); 
}

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '<pre>';
}