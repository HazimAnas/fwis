<!DOCTYPE html>
<html lang="en">
<?php 
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/authenticator.php');
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/header.php');
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/view-action.php');
?>

  <body>
<?php
  include_once('navigation.php'); 
?>  
    <div class="content">

      <div class="text-vertical-center">
        <h1>Update fruit form.</h1> 
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
          <form action="update-action.php" method="POST">
            <table class="form-table">
              <tr>
                <td align="right">Name</td>
                <td align="left"><input type="text" name="name" value=<?php echo $fruit['name']?> /></td>
              </tr>
              <tr>
                <td align="right">Amount</td>
                <td align="left"><input type="text" name="amount" value=<?php echo $fruit['amount']?> /></td>
              </tr>
              <tr>
                <td align="right">Min Amount</td>
                <td align="left"><input type="text" name="min_amount" value=<?php echo $fruit['min_amount']?> /></td>
              </tr>
              <tr>
                <td align="right">Price(RM/kg)</td>
                <td align="left"><input type="text" name="price" value=<?php echo $fruit['price']?> /></td>
              </tr>
              <input type='hidden' name='id' value=<?php echo $fruit['id']?> />
            </table>
            <input type="submit" value="Update"/>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>