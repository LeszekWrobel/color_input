<!DOCTYPE html>
<html>
<head>
  <?php   require_once ('head.php') ?>
</head>
<body>
<a class="btn btn-outline-secondary" href="index.php" role="button">Jeden kolor</a>
<h2>Color Picker</h2>
<form method="post" action="">
  Select your favorite color:
<?php for ($i=0; $i<8; $i++){?>
    <div class="">
      <input type="color" name="favcolor[]" value="#000000"><input type="text" name="name_color[]">
    </div>
<?php   } ?>
  <input type="submit">
</form>
<p><b>Note:</b> type="color" is not supported in Internet Explorer 11 and earlier versions or Safari 9.1 and earlier versions.</p>
<?php
if (isset($_POST['favcolor'])){
foreach( $_POST['name_color'] as $name_color)
          print $name_color.' | ';
  foreach( $_POST['favcolor'] as $val)
						print $val.' | ';
}
?>
<div class="container">
  <div class="row">
<?php
   echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][0].'">';
   echo 'One of three columns <br />'.$_POST['name_color'][0];
?>
        </div>
<?php
   echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][1].'">';
   echo 'One of three columns <br />'.$_POST['name_color'][1];
?>
        </div>
<?php
   echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][2].'">';
   echo 'One of three columns <br />'.$_POST['name_color'][2];
?>
        </div>
        <?php
           echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][3].'">';
           echo 'One of three columns <br />'.$_POST['name_color'][4];
        ?>
                </div>
        <?php
           echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][4].'">';
           echo 'One of three columns <br />'.$_POST['name_color'][4];
        ?>
                </div>
        <?php
           echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][5].'">';
           echo 'One of three columns <br />'.$_POST['name_color'][5];
        ?>
                </div>
                <?php
                   echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][6].'">';
                   echo 'One of three columns <br />'.$_POST['name_color'][6];
                ?>
                        </div>
                <?php
                   echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][7].'">';
                   echo 'One of three columns <br />'.$_POST['name_color'][7];
                ?>
                        </div>

  </div>
</div>

</body>
</html>
