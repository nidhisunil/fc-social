<!-- To connect to database
sessions are used to keep track of whether user is logged in. When user presses log out, session is killed -->
<?php
     $db=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=*") or die('connection failed');
    session_start();
?>
