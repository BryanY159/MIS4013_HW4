<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('mis-4013-database.mysql.database.azure.com', 'BryanY159', 'Rush-4604', 'hw4');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
