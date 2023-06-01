<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title> Form Contatti </title>
  </head>
  <body>
    <div class="container w-50 m-auto">
        <div class="text">
            <h1 class="text-center"> Registrati </h1>
            <hr class="w-25 m-auto bg-dark">
        </div>
        
        <form action="action.php" method="POST" autocomplete="off">
            <div class="user my-4">
              <label for="username"> Nome completo </label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="email my-4">
              <label for="email">Email </label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="contact my-4">
              <label for="contact">Telefono </label>
              <input type="number" name="contact" id="contact" class="form-control" required>
            </div>
            <div class="address my-4">
              <label for="address">Indirizzo: </label>
              <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="message my-4">
              <label for="message">Mesaggio: </label>
              <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <button class="btn btn-success">Invia Messaggio</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   
  </body>
</html>