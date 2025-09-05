<?php
session_start();
$success=$_SESSION['success'] ?? NULL;
$error=$_SESSION['error']?? NULL;
unset($_SESSION['success'], $_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentsimple form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="../assets/style.css">

  </head>
<body>
  <!--for alerts-->
    <div class="card-body">
                <?php if ($success): ?>
                    <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
                <?php endif; ?>
                
                <?php if ($error): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>
    <form action="mainprocess.php" method="post" id ="contact-form"> 
  <div class="form-group">
    <label for="username">username </label>
    <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="type username ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">email  </label>
    <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="name@emailcom">
  </div>
  <div class="form-group">
    <label for="issue"> issue</label>
    <select class="custom-select custom-select-lg mb-3" id="issue" name="issue">
      <option>Query</option>
      <option>Feedback</option>
      <option>Complaint</option>
      <option>Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="comment">comment</label>
    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>