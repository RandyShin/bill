<?php
/**
 * Created by PhpStorm.
 * User: randy
 * Date: 2017-03-27
 * Time: 오전 12:18
 */
function DBcon()
{
    try {

        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
        //$pdo = new PDO('mysql:host=58.229.253.100;dbname=asteriskcdrdb','root','sql@zio!tes');
    } catch (PDOException $e) {
        die($e->getMessage());
    }

}

function fetchAllTasks($pdo)
{

    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'task');

}

//    function dd($animals)
//    {
//    echo '<pre>';
//    die(var_dump($animals));
//    echo '</pre>';
//    }

function check($age)
    {
    if ($age >= 18) {echo 'welcome';}
    else {echo'fuck off';}

    }
