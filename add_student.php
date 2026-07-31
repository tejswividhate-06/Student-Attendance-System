<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    mysqli_query($conn, "INSERT INTO students (name, roll_no)
                         VALUES ('$name', '$roll_no')");
    echo "<script>alert('Student Added Successfully');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>➕ Add Student</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Student Name" required>
        <input type="text" name="roll_no" placeholder="Roll Number" required>
        <button type="submit" name="submit">Add Student</button>
    </form>
    <nav><a href="index.php">🏠 Home</a></nav>
</div>
</body>
</html>
