<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 1</title>
</head>
<body>
    <p>Write a PHP program to enter marks of five subjects Physics, Chemistry,
Biology, Mathematics and Computer, calculate percentage and grade by if
else write a PHP program for find „Thursday‟ in week using switch
Function. </p>

<form method="post">
    <fieldset>
    Phsics:<input type="number" name="phy"></br></br>
    Chemistry:<input type="number" name="che"></br></br>
    maths:<input type="number" name="math"></br></br>
    Biology:<input type="number" name="bio"></br></br>
    Englis:<input type="number" name="eng"></br></br>
    <input type="submit" value="Calculate" name="subtn"/>

    </fieldset>
</form>
</body>
</html>

<?php

$ph=$_POST['phy'];
$ch=$_POST['che'];
$mh=$_POST['math'];
$bi=$_POST['bio'];
$eng=$_POST['eng'];

if(isset($_POST['subtn']))
{
    $per=($ph+$ch+$mh+$bi+$eng)/5;
    echo "Percentage obtainded by student is $per </br>";


    if($per>=90)
    {
        $per=1;
    }
    elseif($per>=80)
    {
        $per=2;
    }
    elseif($per>=70)
    {
        $per=3;
    }
    elseif($per>=60)
    {
        $per=4;
    }
    elseif($per>=40)
    {
        $per=5;
    }
    else
    {
        $per=6;
    }
    switch($per)
    {
        case 1:
            echo "Grade A";
            break;

         case 2:
              echo "Grade B";
            break;

        case 3:
             echo "Grade C";
            break; 
                    
        case 4:
             echo "Grade D";
             break;

        case 5:
            echo "Grade E";
            break;

            default:
            echo "Fail";
    }


}

?>

