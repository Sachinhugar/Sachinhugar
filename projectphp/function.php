<?php
#echo "this is php file";
echo "</br>" ;

#php form variables

$First_name=$_POST["first-name"];
$Last_name=$_POST["last-name"];
$Username=$_POST["email"];
$City=$_POST["message"];


# database connection validating

$sql = new mysqli("localhost","root","root","contact");

if($sql->connect_error=="true")
{
    echo "Database connection failed";
}
else {
   echo " Database connection established"; echo "</br>" ;

    $tc = "create table practice(

    First_name varchar(255) not null,
    Last_name varchar(255)not null,
    email varchar(255) not null,
    message varchar(255) not null)";

    if($sql -> query($tc))
    {
        echo "Table is created in Database ";
    }
    else {
       # echo " Table is not created in the Database ";
        echo "</br>" ;

        $tv = 'insert into practice (First_name,Last_name,email,message) values ("'.$First_name.'" , "'.$Last_name.'","'.$email.'","'.$message.'")';
    if($sql->query($tv)){
        echo "Data submitted successfully";
    }
    else echo"Dot not submitted";
    }
}

exit();
?>