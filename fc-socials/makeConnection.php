<?php
require('connection.php');
$user_id_to=$_GET['q'];
$user_id_from=$_SESSION['user_id'];







$query="INSERT INTO userconnections(user_is,connected_with) VALUES($user_id_from,$user_id_to) RETURNING *";
$result=pg_fetch_assoc(pg_query($db,$query));
print_r($result);



?>
