<?php
$name=$_POST['name'];
$Email=$_POST['Email'];
$phone=$_POST['phone'];
$Adress=$_POST['Adress'];
$Post=$_POST['Post'];
$country=$_POST['country'];
$btn=$_POST['btn'];
$card=$_POST['card'];
$code=$_POST['code'];
$ncard=$_POST['ncard'];




$conn= new mysqli('localhost','root','','testing');
if ($conn->connect_error) {
    die('Conncetion failed :'.$conn->connect_error)''
    # code...
}
else{
    $stmt=$conn->prepare("insert into form(name,Email,phone,Adress,Post,country,btn,card,code,ncard)values(?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param($name,$Email,$phone,$Adress,$Post,$country,$btn,$card,$code,$ncard);
    $stmt->execute();
    echo "used data sucessfully";
    $stmt->close();
    $conn->close();
}

?>

