<?php
$insert =false;
if(isset($_POST['name'])){
  
   $server= "localhost";
   $username= "root";
   $password= "";
   $con=mysqli_connect($server, $username, $password);
   if(!$con)
   {
    die ("connection to this database failed due to" . mysqli_connect_error());
   }
    //echo "Success connecting to the db";
$name= $_POST['name'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$phone=$_POST['phone'];
$other= $_POST['other'];


$sql ="INSERT INTO trip . ustrip (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone','$other', current_timestamp());";
// echo $sql;

   if( $con->query($sql)== true)
    {
   // echo "successfully inserted";
   $insert = true;
    }
   else
   {
   echo "Error : $sql <br> $con->error";
   
   }
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Welcome to Travel Form</title>
</head>
<body>
    <img  class ="bg" src="us.jfif" alt="Audik">
<div class="container">
    <H2>WELCOME TO SRM US TRIP FORM </H2>
        <u><P class="up">Enter your details and submit this form to confirm your participation in the trip</P></u><br>
        <?php
        if($insert == true){
          echo "<p class='thanks'>Thanks for submitting your form.We are happy to see you joining us for the US trip. </p>";
          }
        ?>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email-ID">
            <input type="number" name="phone" id="phone" placeholder="Enter your PhoneNo.">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information"></textarea>
            <button class="btn">Submit</button>
            
        </form>
</div>

</body>
</html>
