<?php include 'validation.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<style>
    h1{
        text-align: center;
        font-size: 10mm !important;
    }
    </style>
<body>
<?php include'Navbar.php';?>
    <div class="container">
<h1> Contact us</h1>


    <form action="submit.php?myurl='abcdefghi25463'"  method="POST" >


       <input type="text" name="first-name" placeholder="Name" required/> <br>


        <input type="text" name="last-name" placeholder="LAST Name" required/> <br>


       <input type="text" name="email" placeholder="address" required/> <br>


        <input type="text" name="message" placeholder="CITY" required/> <br>


       <input type="submit" value="SUBMIT" required />


   </form>
   </div>


</body>


</html