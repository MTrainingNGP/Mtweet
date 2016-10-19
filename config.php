
<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'maximess';
    mysql_connect($host, $user, $password) or die("failed to connect server"); 
   
    mysql_select_db($database) or die("failed to connect database");

    session_start();
<<<<<<< HEAD
    
?>
=======

?>
>>>>>>> 528ad58d454b29b867b702c706fae5fe49c9f169
