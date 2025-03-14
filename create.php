<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $comment = htmlspecialchars($_POST['comment']);

    if ($email) {
        $stmt = $conn->prepare("INSERT INTO inquiry (firstName, lastName, email, comment) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $comment);
        $stmt->execute();
        header("Location: index.php");
    } else {
        echo "Invalid email format";
    }
}
?>