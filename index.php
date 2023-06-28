<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Contatti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      background-image: url('asset/nasa-Yj1M5riCKk4-unsplash.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center bottom;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 30px;
      border-radius: 10px;
    }

    .login-icon {
    float: right;
    width:50px;
    height:50px;
    margin-top: -30px; 
    margin-right: 10px; 
  }

    .login-text {
      float: right;
      width:50px;
      height:20px;
      margin-top:-30px;
      margin-right:10px;
    }

  </style>
</head>
<body>

  <div class="container w-50">
    <div class="text">
      <h1 class="text-center">Contattaci</h1>
      <hr class="w-full m-auto bg-dark">
    </div>

  <div class="login-container">
    <a href="login.php" class="login-link"> <img src="asset/ufo.png" alt="Login Icon" class="login-icon" > <br> <br>  
    <span class="login-text"> LOGIN </span> </a>
  </div>

    <form action="database.php" method="POST" autocomplete="off">
      <div class="nome my-4">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserisci qui il tuo nome" required>
      </div>
      <div class="cognome my-4">
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome" class="form-control" placeholder="Inserisci qui il tuo cognome" required>
      </div>
      <div class="email my-4">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Inserisci qui la tua posta elettronica" required>
      </div>
      <div class="telefono my-4">
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Inserisci qui il tuo numero di telefono" required>
      </div>
      <div>
        <label for="messaggio">Messaggio:</label>
        <textarea name="messaggio" id="messaggio" class="form-control" cols="30" rows="5" placeholder="Scrivi un messaggio..."></textarea>
      </div>
      <button class="btn btn-success mt-4">Invia Messaggio</button>
      
      
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG"

