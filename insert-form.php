<!DOCTYPE html>
<html lang="en">
<?php 
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/authenticator.php');
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/header.php');
?>

  <body>
<?php
  include_once('navigation.php'); 
?>  
    <div class="content">

      <div class="text-vertical-center">
        <h1>Create new fruit form.</h1> 
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
          <form action="insert-action.php" method="POST">
            <table class="form-table">
              <tr>
                <td align="right">Name</td>
                <td align="left"><input type="text" name="name" /></td>
              </tr>
              <tr>
                <td align="right">Amount</td>
                <td align="left"><input type="text" name="amount" /></td>
              </tr>
              <tr>
                <td align="right">Min Amount</td>
                <td align="left"><input type="text" name="min_amount" /></td>
              </tr>
              <tr>
                <td align="right">Price(RM/kg)</td>
                <td align="left"><input type="text" name="price" /></td>
              </tr>
            </table>
            <input type="submit" value="Create"/>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>