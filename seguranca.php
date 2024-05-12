<?php
session_start();
$user = "admin";
$pass = 1234;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Se o usuário e senha são iguais
  if ($_POST["user"] == $user && $_POST["pass"] == $pass) {
    $_SESSION["logado"] = true;
  } else {
    echo "<div class='alert alert-danger' role='alert'>
    Usuário ou senha incorretos
    </div>";
  }
}

// se logado vai aparecer isso ai
if (isset($_SESSION["logado"]) && $_SESSION["logado"] == true) {
  // se logado não acontece nada
} else { // se não estiver logado
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Painel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
<div class="container">
<form action="" method="post" accept-charset="utf-8" class="my-5">
<div class="mb-3">
<label for="user" class="form-label">Usuário</label>
<input type="text" name="user" id="user" class="form-control">
</div>
<div class="mb-3">
<label for="pass" class="form-label">Senha</label>
<input type="password" name="pass" id="pass" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Entrar</button>
<a href="/" class="btn btn-outline-info rounded-5">
Inicio
</a>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7TlRbs/ic4AwGcFZOxg5DpPt8EgeUIgIwzjWfXQKWA3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>
<?php
exit();
}
?>
