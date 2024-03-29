<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title;?></title>
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  <header>
    <div class="container-fluid grid">
      <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">NPro</a>
              </li>
              <?php if ($auth): ?>
              <li class="nav-item">
                <a href="/notes" class="nav-link">Добавить</a>
              </li>
              <li class="nav-item">
                <a href="/account" class="nav-link">Личный кабинет</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/account/logout">Выйти</a>
              </li>
              <?php else: ?>
              <li class="nav-item">
                <a href="/about" class="nav-link">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/account/registration">Регистрация</a>
              </li>
            <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>

   <main>
     <div class="container">
       <?php include_once $content;?>
     </div>
   </main>

   <footer>
     <h5>footer</h5>
   </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
