<?php
    $servername= "localhost";
    $username = 'ts_user';
    $password = 'pa55word';

    $dbname='tech_support';
    $db=new mysqli($servername, $username, $password, $dbname);
     if (mysqli_connect_errno()) { 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}
?>
