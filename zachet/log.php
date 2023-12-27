<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Авторизация</title>
  <style>
    body {
      padding: 50px;
    }
  </style>
</head>
<body>

  <div class="container">
    <a href="index.php" class="btn btn-link mt-3">Назад</a>
    <h2>Авторизация</h2>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email адрес</label>
        <input type="email" class="form-control" id="email" placeholder="Введите ваш email адрес">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password" placeholder="Введите пароль">
      </div>
      <button type="submit" class="btn btn-primary">Войти</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
