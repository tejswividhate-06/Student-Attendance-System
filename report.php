<?php
include 'db.php';

$result = mysqli_query($conn,
"SELECT students.name, students.roll_no,
        attendance.status, attendance.attendance_date
 FROM attendance
 JOIN students ON attendance.student_id = students.id
 ORDER BY attendance.attendance_date DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance Report</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>📊 Attendance Report</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll No</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['roll_no']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['attendance_date']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <nav><a href="index.php">🏠 Home</a></nav>
</div>
</body>
</html>
