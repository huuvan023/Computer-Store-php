<?php
include ("connection.php");

function executeQuery(string $query){
$result = $GLOBALS['conn']->prepare($query);
$result->execute();
$finalResult = $result->fetchAll();
return $finalResult;
}
$a = $executeQuery()
?>