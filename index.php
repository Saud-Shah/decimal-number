<!DOCTYPE html>
<html>
  <head>
    <title>Decimal Number</title>
    <style>
      form{
        background-color: lightgreen;
        margin: 10% 35% 0% 35%;
        padding-left: 8%;
      }
      span{
        background-color: lightblue;
        border: 1px solid;
        margin: 1% 40% 0% 57.5%;
        padding: 0% 2% 0.5%;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <table border="0" cellspacing=5>
        <tr>
          <td colspan="2">Enter Decimal Number</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="text" name="num" placeholder="Enter Number" value="<?php echo $_POST['num']??''?>">
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>
            <select name="function">
                      <option value="Ceil">Ceil</option>
                      <option value="Round">Round</option>
                      <option value="Floor">Floor</option>
            </select>
          </td>
          <td>
            <input type="submit" name="process" value="Process">
          </td>
        </tr>
      </table>
    </form>
    <?php
      if (isset($_POST['process'])) {
        if ($_POST['function'] == "Ceil" && $_POST['num'] != "" ) {
          echo "<span>".$_POST['num']." = ".ceil($_POST['num'])."</span>";
        }
        if ($_POST['function'] == "Round" && $_POST['num'] != "" ) {
          echo "<span>".$_POST['num']." = ".round($_POST['num'])."</span>";
        }
        if ($_POST['function'] == "Floor" && $_POST['num'] != "" ) {
          echo "<span>".$_POST['num']." = ".floor($_POST['num'])."</span>";
        }
      }
    ?>
  </body>
</html>
