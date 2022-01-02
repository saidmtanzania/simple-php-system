<?php
include_once './component/_conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empid = $_REQUEST['uid'];
    $email = $_REQUEST['email'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $post = $_REQUEST['post'];
    $salary = $_REQUEST['salary'];

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE Employee SET eFname='$fname', eLname='$lname', eEmail='$email', post='$post', salary='$salary' WHERE empno='$empid'";

    if (mysqli_query($con, $sql)) {
        header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($conn);
}
?>