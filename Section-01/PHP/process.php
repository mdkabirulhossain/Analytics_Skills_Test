<?php
$sName = "localhost";
$uName = "root";
$password = "";
$dbName = "User_Information";

$conn = new mysqli($sName, $uName, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If there are no errors, insert the data into the database
    if (empty($errors)) {
        $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            $success_message = "Thank you for your message! We will get back to you soon.";
            header("Location: contact_form.php?success=1");
            exit;
        } else {
            $errors[] = "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // If there are errors, redirect back to the form with the errors
    header("Location: contact_form.php?errors=" . urlencode(serialize($errors)));
    exit;
}

// Close the database connection
$conn->close();
?>