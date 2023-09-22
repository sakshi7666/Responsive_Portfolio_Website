<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "your_server_name";
    $username = "your_username";
    $password = "your_password";
    $dbname = "contact_form";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $address = $_POST["address"];
    $emailAddress = $_POST["email_address"];
    $contactNumber = $_POST["contact_number"];

    $sql = "INSERT INTO messages (name, email, subject, message, address, email_address, contact_number)
            VALUES ('$name', '$email', '$subject', '$message', '$address', '$emailAddress', '$contactNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
