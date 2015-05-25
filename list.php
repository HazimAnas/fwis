<!DOCTYPE html>
<html lang="en">

<?php 
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/authenticator.php');
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/retrieve-action.php');
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/header.php');
?>
    <body>
<?php
  include_once('navigation.php'); 
?> 
    <div class="content">

      <div class="text-vertical-center">
              <h1>Fruit(s) List.</h1> 
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
                <table>
                  <tr><th>Num</th><th>Name</th><th>Amount(kg)</th><th>Minimum Amount(kg)</th><th>Price(RM/kg)</th></tr>
                <?php
                  $i=1;
                  foreach ($array as $row => $val) {
                      echo "
                      <tr>
                        <td>".$i."</td>
                        <td><a href='view.php/?id=".$val['id'] ."'</a>".$val['name']."</td>
                        <td>".$val['amount']."</td>
                        <td>".$val['min_amount']."</td>
                        <td>".$val['price']."</td>
                      </tr>";
                      $i++;
                  }
                ?>
                </table>
          </div>
        </div>
      </div>
<?php
  include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/fwis/footer.php');
?>