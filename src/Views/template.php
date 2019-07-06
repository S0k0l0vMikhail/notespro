<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title;?></title>
  <link rel="stylesheet" href="/css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="/scripts/validate.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">

              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="/" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                      <a href="/notes" class="nav-link">Новая заметка</a>
                  </li>

                  <li class="nav-item">
                      <a href="/account" class="nav-link">Личный кабинет(настройки)</a>
                  </li>
              </ul>
          </div>
      </nav>
  </header>

   <main>
     <?php include_once $content;?>
   </main>

   <footer>
     <h5>footer</h5>
   </footer>
</body>
</html>
