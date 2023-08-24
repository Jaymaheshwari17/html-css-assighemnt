<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='testing';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if ($con) {
    echo "conntion succesfully";
    # code...
}
else {
    die(mysqli_error($con));
    
}


?>