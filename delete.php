<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    echo "Mwanafunzi amefutwa kwa mafanikio!";
}

header("Location: index.php");
exit;
?>
