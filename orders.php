

<?php
$servername='localhost';
$username='root';
$password='';
$databasename='breeze hotel';
$con=mysqli_connect($servername,$username,$password,$databasename);
if($con){
	echo'Connected Well ';
}
else{
	echo'Not connected';
}



if(isset($_POST['send'])){

    $a=$_POST['Names'];
    $b=$_POST['email'];
    $c=$_POST['phone'];
    $d=$_POST['adress'];
    $e=$_POST['Drink'];
    $f=$_POST['Food'];
    $g=$_POST['Pay'];
    
    }
    $sql="INSERT INTO abc(Names,email,phone,adress,Drink,Food,Pay)
    VALUES('$a','$b','$c','$d','$e','$f','$g')";
    $run=mysqli_query($con,$sql);
    if($run)

    {
    echo"<script>alert('Application sent successfully!')</script>";
    }
    else{
      echo"<script>alert('oops! Something wrong' )</script>";
   
      
    }

    


?>

