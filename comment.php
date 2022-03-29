

<?php
include('connection/connection.php');
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $query =  mysqli_query($conn,"INSERT INTO comment (name, email,subject,message) VALUES('$name','$email','$subject','$message')");
if($query){
    echo "<script>alert('Inserted Successfully');</script>";
}
else{
    echo "<script>alert('Inserted Successfully');</script>";

}
}
?>