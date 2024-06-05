<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <nav class="m-auto bg-dark p-3">
      <div class="container">
        <div class="row">
          <div class="col text-center">
      <a class="navbar-brand text-white text-center" href="index.php">Rezultat validacije vašeg XML-a</a>
</div>
</div>
</div>
    </nav>
  
   
<div class="container mt-5">

<?php

$xml_file = $_FILES['xml'];


echo "<h3>XML File</h3>";
echo "<pre class='border border-secondary p-2'>";
print_r($xml_file);
echo "</pre>";




$xml = new DOMDocument();
$isValid = $xml->load($xml_file['tmp_name']);
if ($isValid) {
  echo "<div class='alert alert-success'>Ovaj XML file je validan.</div>";
} else {
  echo "<div class='alert alert-danger'>Ovaj XML file nije validan.</div>";
}


?>
</div>
 </body>
</html>
