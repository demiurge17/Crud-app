<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM inquiry WHERE id=$id");
$row = $result->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $comment = htmlspecialchars($_POST['comment']);
    
    if ($email) {
        $stmt = $conn->prepare("UPDATE inquiry SET firstName=?, lastName=?, email=?, comment=? WHERE id=?");
        $stmt->bind_param("ssssi", $firstName, $lastName, $email, $comment, $id);
        $stmt->execute();
        header("Location: index.php");
    } else {
        echo "Invalid email format";
    }
}
?>