<?php include 'Db.php' ;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['gmail'];
$username= $_POST['username'];
$password= $_POST['password'];

$sql="insert into gammingusergames (fname, lname, gmail, username, password)
values('$fname', '$lname', '$gmail', '$username', '$password')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>