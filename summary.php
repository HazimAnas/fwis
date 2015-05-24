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
          <table>
            <tr><th>Num</th><th>Name</th><th>Amount</th><th>Minimum Amount</th><th>Price</th><th>Total Value</th><th>Status</th></tr>
          <?php
            $i=1;
            $r=0;
            $o=0;
            $g=0;
            foreach ($array as $row => $val) {
                echo "
                <tr>
                  <td>".$i."</td>
                  <td><a href='view.php/?id=".$val['id'] ."'</a>".$val['name']."</td>
                  <td>".$val['amount']."</td>
                  <td>".$val['min_amount']."</td>
                  <td>".$val['price']."</td>
                  <td>".$val['amount']*$val['price']."</td>
                  <td>";
                      if($val['amount'] <= $val['min_amount']){
                        echo 'Red';
                        $r++;
                    }
                    else if($val['amount']-$val['min_amount'] >= $val['min_amount'] * 2){
                      echo 'Green';
                      $g++;
                    }
                    else 
                      {
                        echo "Orange</td>";
                        $o++;
                      }
               echo " </tr>";
                $i++;
            }
          ?>
          <tr><td colspan='' align="left">          
            <h3>Status Summary</h3>
              <p><pre>Green  : <?php echo $g; ?></pre></p>
              <p><pre>Orange : <?php echo $o; ?></pre></p>
              <p><pre>Red    : <?php echo $r; ?></pre></p>
            </td></tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>