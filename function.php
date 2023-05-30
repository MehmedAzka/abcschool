<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $date_birth = $_POST['date_birth'];
    $gender = $_POST['gender'];
    $date_register = date('Y-m-d');

    $query = "INSERT INTO student_register VALUE (NULL, '$name', '$email', '$address', '$date_birth', '$gender', '$date_register')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: regisForm.php');
        exit();
    } else {
        $sql;
    }
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $date_submit = date('Y-m-d');

    $query = "INSERT INTO contact_us VALUE (NULL, '$name', '$email', '$subject', '$message', '$date_submit')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: contact.php');
        exit();
    } else {
        $sql;
    }
}
?>