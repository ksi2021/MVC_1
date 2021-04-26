<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header class="container-fluid" >
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <img src="/images/logo.png" width="130" alt="">
 <!-- <a class="navbar-brand" href="/"> Главная</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/company/skladi">Cклады</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/company/about">О нас</a>
      </li>
      <?php if(isset($_SESSION['user'])): ?>
        <?php if($_SESSION['user']['role'] == "admin"): ?>
            <li class="nav-item ">
                <a class="nav-link" href="/company/add"> Добавить продукцию</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/company/add_sklad"> Добавить склад</a>
            </li>
            <?php endif; ?>
        <li class="nav-item ">
        <a class="nav-link" href="/user/logout/"><?= $_SESSION['user']['username'] ?> (Выход)</a>
      </li>
        <?php else: ?>
      <li class="nav-item ">
          <a class="nav-link" href="/">[Регистрация</a>  
      </li>
      <li class="nav-item ">
          <a class="nav-link" href="/user/login">Вход]</a>
      </li>
    <?php endif; ?>
      
      
    </ul>
   
  </div>
</nav>
</header>
<main class="container">
    <?php include 'application/views/'.$content_view; ?>
</main>
<footer>

</footer>
</body>
</html>
