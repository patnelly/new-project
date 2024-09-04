<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Angalia Taarifa za Mwanafunzi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: #3498db;
            padding: 5px 10px;
            border: 1px solid #3498db;
            border-radius: 4px;
        }
        a:hover {
            background-color: #3498db;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Taarifa za Mwanafunzi</h2>

    <?php
    include 'database.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $student = $stmt->fetch();

        if ($student) {
            echo "<table>";
            echo "<tr><th>ID</th><td>" . $student['id'] . "</td></tr>";
            echo "<tr><th>Jina Kamili</th><td>" . $student['full_name'] . "</td></tr>";
            echo "<tr><th>Barua pepe</th><td>" . $student['email'] . "</td></tr>";
            echo "<tr><th>Kozi</th><td>" . $student['course'] . "</td></tr>";
            echo "<tr><th>Tarehe ya Usajili</th><td>" . $student['reg_date'] . "</td></tr>";
            echo "</table>";
        } else {
            echo "<div class='error-message'>Mwanafunzi hajapatikana!</div>";
        }
    } else {
        echo "<div class='error-message'>Hakuna ID ya mwanafunzi iliyotolewa!</div>";
    }
    ?>
    <br>
    <a href="index.php">Rudi kwenye Orodha ya Wanafunzi</a>
</body>
</html>
