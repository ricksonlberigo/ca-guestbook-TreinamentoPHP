<?php require_once __DIR__ . '/../controller/deleteVisitorControllerWeb.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Guestbook - Treinamento PHP Hypersoft" />
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <title>Guestbook - Treinamento PHP Hypersoft</title>
</head>

<body>
  <div class="container">
    <h2 class="text-center mt-5">Excluindo Visitante</h2>
    <?php if ($error) : ?>
      <div class="alert alert-danger mt-5" role="alert"><?= $error; ?></div>
    <?php else : ?>
      <form method="POST" class="mt-5">
        <div class="mb-3">
          <label class="form-label">Tem certeza que quer excluir o visitante <strong><?= $visitor['email']; ?></strong> ?</label>
        </div>
        <input type="hidden" name="email" value="<?= $visitor['email']; ?>">
        <input type="submit" value="Excluir" class="btn btn-danger">
        <a href="listTemplate.php" class="btn btn-secondary">Voltar</a>
      </form>
    <?php endif; ?>
  </div>
</body>

</html>