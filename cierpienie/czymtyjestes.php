<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="infocss.css">
</head>
<body>
        <a href="index.php"><div class="powrot">
    </div></a>
    <center>
        <div class="php">
          <form method="post">
            <input type="submit" value="MANGO" name="button">
          </form>
          <?PHP 
          if (isset($_POST['button'])) {
          button(); }
          function button() {
          echo "MUSZTARDA"; }
          ?>
        </div>
    </center>
    
</body>
</html>