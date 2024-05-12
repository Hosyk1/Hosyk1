<?php
include("seguranca.php");
if ($_POST["poster"]) {
// Read existing data from list.json
$jsonData = file_get_contents('list.json');
$dataArray = json_decode($jsonData, true);

// Get form data
$title = $_POST['title'];
$poster = $_POST['poster'];
$link = $_POST['link'];

// Add new data to the array
$newEntry = [
    'titulo' => $title,
    'poster' => $poster,
    'link' => $link
];

array_push($dataArray, $newEntry);

// Encode the updated array and write it to list.json
$updatedJsonData = json_encode($dataArray, JSON_PRETTY_PRINT);
file_put_contents('list.json', $updatedJsonData);

// Redirect back to painel.php
header('Location: painel.php');
}


?>

<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
  <div class="position-absolute top-0 right-0 m-2">
  <a href="sair.php" class="btn btn-danger ">Sair</a>
  <a href="/" class="btn btn-outline-info rounded-5">
    Inicio
  </a>
  </div>
    <div class="container pt-5 text-white">
        <h1 class="mb-3">Add New Entry</h1>
        <form action="" method="post">
            <div class="form-group mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="poster" class="form-label">Poster URL:</label>
                <input type="url" name="poster" id="poster" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="link" class="form-label">Link:</label>
                <input type="url" name="link" id="link" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>