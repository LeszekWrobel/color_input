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
  <div class="">
    <input type="color" name="favcolor[]" value="#000000"><input type="text" name="name_color[]">
    </div>
   <div class="">
      <input type="color" name="favcolor[]" value="#000000"><input type="text" name="name_color[]">
    </div>
     <div class="">
      <input type="color" name="favcolor[]" value="#000000"><input type="text" name="name_color[]">
    </div>
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
  </div>
</div>

</body>
</html>

