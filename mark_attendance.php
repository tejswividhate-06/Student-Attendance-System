<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $student_id = $_POST['student_id'];
    $status = $_POST['status'];
    $date = date('Y-m-d');

    mysqli_query($conn, "INSERT INTO attendance
        (student_id, status, attendance_date)
        VALUES ('$student_id', '$status', '$date')");

    echo "<script>alert('Attendance Marked Successfully');</script>";
}

$students = mysqli_query($conn, "SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mark Attendance</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>✅ Mark Attendance</h2>
    <form method="post">
        <select name="student_id" required>
            <option value="">Select Student</option>
            <?php while ($row = mysqli_fetch_assoc($students)) { ?>
                <option value="<?php echo $row['id']; ?>">
                    <?php echo $row['name'] . ' (' . $row['roll_no'] . ')'; ?>
                </option>
            <?php } ?>
        </select>

        <select name="status" required>
            <option value="Present">Present</option>
            <option value="Absent">Absent</option>
        </select>

        <button type="submit" name="submit">Save Attendance</button>
    </form>
    <nav><a href="index.php">🏠 Home</a></nav>
</div>
</body>
</html>
