<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = ""; // Use your MySQL root password here
    $db_name = "tour";
    $db_port = 3307;

    // Include the port in the mysqli_connect call
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name, $db_port);
    if (!$conn) {
        echo "Connection Failed: " . mysqli_connect_error();
        exit;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (Name, Email, Phone, Subject, Message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }
    echo "We will contact you soon";
    mysqli_close($conn);
?>
