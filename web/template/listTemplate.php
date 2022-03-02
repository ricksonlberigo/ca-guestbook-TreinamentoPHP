<?php require_once __DIR__ . '/../controller/ListAllVisitorsControllerWeb.php'; ?>
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
    <h2 class="display-2 text-center mt-5">Lista de Visitantes</h2>

    <div class="container-fluid">
      <form class="row g-3 mt-5">
        <div class="col-9">
          <input type="email" class="form-control form-control-lg" value="<?= $email ?>" name="email" placeholder="Digite o e-mail a ser pesquisado">
        </div>
        <div class="col-3">
          <button type="submit" class="btn btn-primary mb-3 btn-lg">Pesquisar e-mail</button>
        </div>
      </form>
    </div>

    <div class="container-fluid mt-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">E-mail</th>
            <th scope="col">Nome</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($visitors as $visitor) : ?>
            <tr>
              <td><?= $visitor['email']; ?></td>
              <td><?= $visitor['name']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <a href="../index.php" class="btn btn-secondary btn-lg">Voltar</a>
    </div>
  </div>
</body>

</html>