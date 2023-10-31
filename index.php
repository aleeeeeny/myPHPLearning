<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1> Form  </h1>
<form action="connect.php" method="post">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" placeholder="Enter your name ">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" placeholder="Enter your Email ">
  </div>
<h6> Gender</h6>

  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
  <div class="mb-3">
    <label  class="form-label">Mobile Number</label>
    <input type="text" name="mobile" placeholder="Enter your Number ">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="password" placeholder="Enter your password ">
  </div>

  <button type="submit" class="btn btn-primary">Submit Data</button>
</form>
</div>
</body>
</html>