<?php
// This page shows the form data that was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $courseName = $_POST['courseName'];
  $instructor = $_POST['instructor'];
  $sessionDate = $_POST['sessionDate'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Submission Results</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Course Submitted Successfully!</h1>
  <table border="1" cellpadding="10">
    <tr><th>Field</th><th>Value</th></tr>
    <tr><td>Course Name</td><td><?php echo $courseName; ?></td></tr>
    <tr><td>Instructor</td><td><?php echo $instructor; ?></td></tr>
    <tr><td>Session Date</td><td><?php echo $sessionDate; ?></td></tr>
  </table>
</body>
</html>