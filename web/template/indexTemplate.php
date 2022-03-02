<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Guestbook Clean Architecture - Hypersoft">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="shortcut icon" href="../assets/img/guestbook.png" type="image/x-icon">
  <title>Guestbook Clean Architecture - Hypersoft</title>
</head>

<body>
  <div class="container">
    <h2 class="display-2 text-center mt-5">Livro de Visitas</h2>

    <div class="container-fluid">
      <form action="../controller/SaveVisitorControllerWeb.php" method="POST">
        <div class="mb-3">
          <label for="visitorEmail" class="form-label">Email</label>
          <input type="email" class="form-control form-control-lg" id="visitorEmail" placeholder="Digite o seu e-mail" name="visitorEmail">
        </div>

        <div class="mb-3">
          <label for="visitorName" class="form-label">Nome</label>
          <input type="text" class="form-control form-control-lg" id="visitorName" placeholder="Digite o seu nome" name="visitorName">
        </div>

        <input type="submit" class="btn btn-primary btn-lg" value="Assinar livro de visitas">
        <a href="template/listTemplate.php" class="btn btn-secondary btn-lg">Lista de visitantes</a>
      </form>
    </div>
  </div>
</body>

</html>