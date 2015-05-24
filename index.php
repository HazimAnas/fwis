<!DOCTYPE html>
<html lang="en">
<?php
  session_start(); 
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/header.php');
?>

  <body>

    <div id="header-image"></div>
    <header id="header">

      <div class="text-vertical-center">
        <h1>Welcome to Fruit Warehouse Inventory System.</h1> 
        <h3>Keeping track of fruits without the hassle.</h3>
        <br>
        <div class="panel">
          <?php
            if (isset($_SESSION['errors']))
            {
              for ($i=0; $i<count($_SESSION['errors']); $i++)
              {
                echo "<p>".$_SESSION['errors'][$i]."</p>";
              }
            unset($_SESSION['errors']);
            }
          ?>
          <form action="login-action.php" method="POST">
            <p> Username : <input type="text" name="username"/> </p>
            <p> Password : <input type="text" name="password"/> </p>
            <p> <input type="submit" value="Login"/> </p>
          </form>
        </div>
      </div>

    </header>
    <div id="container">
      <div id="content-wrapper">
      </div>
    </div>
  </body>
</html>