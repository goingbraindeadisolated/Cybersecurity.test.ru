<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Опрос</title>
    <link rel="stylesheet" href="styles/firstStyles.css">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|IBM+Plex+Serif&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  </head>
  <body>
      <div id="content">
        <div id="regblock">
          <form method="POST" action="/includes/RegistrationHandler.php">
            <h3>Регистрация</h3><hr>
            <div id="blockcontent">
              <div class="regrow">
                <label class="textfieldlabel" for="name">Имя:</label><br>
                <input class="textfield" required type="text" placeholder="Олег" name="name"><br>
              </div>

              <div class="regrow">
                <label class="textfieldlabel" for="surname" pattern:"^[А-Яа-яЁё]+$">Фамилия:</label><br>
                <input class="textfield" required type="text" name="surname" placeholder="Олегов" patterm:"^[А-Яа-яЁё]+$"><br>
              </div>

              <div class="regrow">
                <label class="textfieldlabel" for="email">Email:</label><br>
                <input class="textfield" required placeholder="olegoleg@oleg.com" type="text" name="email" pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"><br>
              </div>
               <div class="regrow">
                   <input type="submit" value="Завершить">
                 </div>
              </div>
            </div>
          </form>
        </div>
  </body>
</html>
