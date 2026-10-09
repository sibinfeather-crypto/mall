<?php

$con =  @mysqli_connect('localhost', 'u482088349_coloruser', 'Color@12345', 'u482088349_colordb');



if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    
    $sqlinsert =  mysqli_query($con,"INSERT INTO `tbl_test` (test) VALUES ('123')" );
    
}

?>