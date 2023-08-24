<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'conn.php';

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

    $sql="insert into `form`(name,Email,phone,Adress,Post,country,btn,card,code,ncard)
    values('$name','$Email','$phone','$Adress','$Post','$country','$btn','$card','$code','$ncard')";

    $result=mysqli_query($con,$sql);

    if ($result) {
        echo "Data Inserted";
        # code...
    }
    else {
        die(mysqli_error($con));
    }

    
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>User Form</h2>
        <div class="Form-container">
            <form action="form.php" method="post">
                <div class="input-name">
                <label for="name">name:</label>
                <input type="text" name="name"><br>
                </div>
                <div class="input-name">
                <label for="Email">Email:</label>
                <input type="email" name="Email"><br>
                </div>
                <div class="input-name">
                    <label for="phone">phone:</label>
                    <input type="tel" name="phone"><br>
                </div>
                <div class="input-name">
                    <label for="Adress">Adress:</label>
                    <input type="text" name="Adress"><br>
                </div>

                <div class="input-name">
                    <label for="POST">Post Code:</label>
                    <input type="number" name="Post"><br>
                </div>
                
                  <div class="input-name">
                    <label for="country">country:</label>
                    <select class="country" name="country">
                        <option>India</option>
                        <option>UK</option>
                        <option>USa</option>
                    </select>

                  <div class="input-name">
                     <label>CARD TYPE</label>
                     <input type="radio" class="radio-button" name="btn">
                     <label for="visa">Visa</label>

                     <input type="radio" class="radio-button" name="btn">
                     <label for="AMEX">AMEX</label>

                     <input type="radio" class="radio-button" name="btn">
                     <label for="mastercard">mastercard</label>
                    </div>
                  <div class="input-name">
                     <label for="card">Card Number:</label>
                     <input type="number" name="card">
                    </div>

                  <div class="input-name">
                     <label for="code">Security Code:</label>
                     <input type="number" name="code">
                    </div>

                    <div class="input-name">
                        <label for="ncard">Name of card:</label>
                        <input type="text" name="ncard">
                    </div>
                    <input type="submit" name="submit">
                    
              </div>
                

            </form>
        </div>
    </div>
    
</body>
</html>