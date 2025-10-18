 <?php
  // I used PHP variables here so I can reuse them for other pages easily
  $pageTitle = "SmartRegister – Faculty Intern Dashboard";
  $headerTitle = "Faculty Intern Courses";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <nav>
    <div class="logo">SmartRegister</div>
    <div class="nav-links">
      <a href="#">Courses</a>
      <a href="#">Sessions</a>
      <a href="#">Reports</a>
      <a href="#">Logout</a>
    </div>
  </nav>

  <main>
    <h1 class="dashboard-title"><?php echo $headerTitle; ?></h1>

    <!-- I added this section to collect registration data -->
    <section class="form-section">
      <h2>Register a New Course</h2>
      <form action="register.php" method="POST">
        <label>Course Name:</label><br>
        <input type="text" name="courseName" required><br><br>

        <label>Instructor:</label><br>
        <input type="text" name="instructor" required><br><br>

        <label>Session Date:</label><br>
        <input type="date" name="sessionDate" required><br><br>

        <button type="submit">Save Course</button>
      </form>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>