<h1>Indexed Array</h1>

<?php



$myarray[0]="Cycle";
$myarray[1]="Bike";
$myarray[2]="Car";
$myarray[3]="Bus";
$myarray[4]="Train";
$myarray[5]="Plane";


echo $myarray[0];
echo "<br>";
echo $myarray[1];
echo "<br>";
echo $myarray[2];
echo "<br>";
echo $myarray[3];
echo "<br>";
echo $myarray[4];
echo "<br>";
echo $myarray[5];
echo "<br>";

?>

<h1>Associative Arrays</h1>

<?php

$mycararray=array("cycle"=>2,"Bike"=>5, "Car"=>9,"Bus"=>10,"Train"=>12,"Plane"=>15);
foreach($mycararray as $key=>$val){
    echo "Key is: ".$key.", "."value is:" .$val;
    echo "<br>";
}

?>


<h1>Multidimensional Arrays</h1>

<?php

$multiarray=array(
    array("Cycle"=>2, "Bike"=>5,"Car"=>10,"Bus"=>12,"Train"=>14,"Plane"=>17),
    array("Cycle"=>3, "Bike"=>6,"Car"=>8,"Bus"=>11,"Train"=>18,"Plane"=>20),
    array("Cycle"=>5, "Bike"=>7,"Car"=>9,"Bus"=>13,"Train"=>19,"Plane"=>21)
);


$mymultisize=count($multiarray);
$keys=array_keys($multiarray);

for($row=0;$row<$mymultisize; $row++){
    echo "<b>Row" .$row. "Contains below data</b>";
    echo "<br>";

    foreach($multiarray[$keys[$row]] as $key=>$val){
        echo $key.":".$val;
        echo "<br>";
    }
    echo "<br>";
}

?>