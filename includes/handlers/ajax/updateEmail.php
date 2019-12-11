<?php 
include("../../config.php");
if(!isset($_POST['username'])) {
    echo "ERROR: could not set username";
    exit();
}

if(isset($_POST['email']) && $_POST['email'] != "")  {

    $username = $_POST['username'];
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email is invalid";
        exit();

    }
    $emailCheck = mysqli_query($con, "select email from users where email='$email' and username != '$username'");
    if(mysqli_num_rows($emailCheck) > 0) {
        echo "Email is already in use";
        exit();
    }

    $updateQuery = mysqli_query($con, "update users set email = '$email' where username='$username'");
    echo "Email updated successfully!";

}
else {
    echo "you must provide an username";
}
?>