<h1>Build Form</h1>
<hr />
<p>Please build a form: Full Name, Email, Job Title, Your Avatar (png/jpg/svg), Your Document (xsls, docx)  and code submit the form (use PHP without framework)</p>
<!-- Write your answer below -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">User Form</h2>
  <form action="#" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="fullName" class="form-label">Full Name:</label>
      <input type="text" class="form-control" id="fullName" name="fullName" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="jobTitle" class="form-label">Job Title:</label>
      <input type="text" class="form-control" id="jobTitle" name="jobTitle" required>
    </div>
    <div class="mb-3">
      <label for="avatar" class="form-label">Your Avatar (png/jpg/svg):</label>
      <input type="file" class="form-control" id="avatar" name="avatar" accept="image/png, image/jpeg, image/svg+xml" required>
      <?php if(isset($_POST['submit']) && !in_array($_FILES['avatar']['type'], ['image/png', 'image/jpeg', 'image/svg+xml'])): ?>
        <div class="text-danger">Error: Only PNG, JPEG, or SVG files are allowed.</div>
      <?php endif; ?>
    </div>
    <div class="mb-3">
      <label for="document" class="form-label">Your Document (xlsx, docx):</label>
      <input type="file" class="form-control" id="document" name="document" accept=".xlsx, .docx" required>
      <?php if(isset($_POST['submit']) && !in_array($_FILES['document']['type'], ['application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel'])): ?>
        <div class="text-danger">Error: Only XLSX or DOCX files are allowed.</div>
      <?php endif; ?>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php 

if(isset($_POST['submit'])){
    $avatarType = $_FILES['avatar']['type'];
    $documentType = $_FILES['document']['type'];
    $allowedAvatarTypes = ['image/png', 'image/jpeg', 'image/svg+xml'];
    $allowedDocumentTypes = ['application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel'];
    if (!in_array($avatarType, $allowedAvatarTypes) || !in_array($documentType, $allowedDocumentTypes)) {
        
    } else {
    $fullName = $_POST['fullName'];
      $email = $_POST['email'];
      $jobTitle = $_POST['jobTitle'];
      $avatarName = $_FILES['avatar']['name'];
      $avatarTmpName = $_FILES['avatar']['tmp_name'];
      $documentName = $_FILES['document']['name'];
      $documentTmpName = $_FILES['document']['tmp_name'];
      move_uploaded_file($avatarTmpName, 'uploads/image/' . $avatarName);
      move_uploaded_file($documentTmpName, 'uploads/document/' . $documentName);


      echo "<div class='alert alert-success mt-3' role='alert'>";
      echo "Full Name: $fullName<br>";
      echo "Email: $email<br>";
      echo "Job Title: $jobTitle<br>";
      echo "Avatar: <img src='uploads/image/$avatarName' alt='Avatar' width='300px;'><br>";
      echo "Document: <a href='uploads/document/$documentName' download>Download Document</a><br>";
      echo "</div>";
    }
}


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
