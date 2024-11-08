<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Employees</title>
</head>
<body>

<form class="mt-5 w-50 m-auto" action="display.php
" method="post">
  <div class="mb-3 ">
    <label for="exampleInputName1" class="form-label">Your Name </label>
    <input type="text" class="form-control" id="exampleInputName1" name="name">

  </div>
  <div class="mb-3">
    <label for="exampleInputAge1" class="form-label">Your Age</label>
    <input type="number" min="21" max="100"class="form-control" id="exampleInputAge1" name="age">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputSpeciality1" class="form-label">Your Speciality</label>
    <input type="text" class="form-control" id="exampleInputSpeciality1" name="speciality">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</form>
</body>
</html>