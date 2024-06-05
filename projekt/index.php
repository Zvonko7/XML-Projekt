<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <a class="navbar-brand text-white">Validacija XML dokumenta</a>
    <p class="text-white m-0">Zvonko Marijanović</p>
  </div>
</nav>

  <div class="container mt-5 col-4">

 
    <form action="provjera.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="xmlFile" class="form-label">XML File</label>
        <input class="form-control" type="file" id="xmlFile" name="xml">
      </div>
      <button type="submit" class="btn btn-primary">Validacija</button>
    </form>

  </div>
</body>

</html>
