<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Опрос</title>
    <link rel="stylesheet" href="/styles/firstStyles.css">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|IBM+Plex+Serif&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="back"></div>
      <div id="content">
        <div id="regblock">
          <form method="POST" action="RegHandler.php">
            <h3>Укажите ваши персональные данные</h3>
            <div id="blockcontent">
              <div id=labels>
                <label for="name">Имя</label><br>
                <label for="surname">Фамилия</label><br>
                <label for="email">Email</label><br>
              </div>
              <div id="textfields">
                <input type="text" name="surname"><br>
                <input type="text" name="name"><br>
                <input type="text" name="email"><br>
              </div>
            </div>
          </form>
        </div>
      </div>
  </body>
</html>
