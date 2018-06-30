<!DOCTYPE html>
<html>
<head>
  <?php   require_once ('head.php') ?>
</head>
<body>
<a class="btn btn-outline-secondary" href="index.php" role="button">Jeden kolor</a>
<h2>Color Picker</h2>
Select color:
<form method="post" action="">
<?php $i=0;
for ($i=0; $i<8; $i++){?>
    <div class="color" style="float:left">
      <input type="color" name="favcolor[]"  value="#ff0000"  style="cursor: pointer"><input type="text" name="name_color[]" size="10px" placeholder="opis koloru">
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
    <div class="col-sm-6" >
        <div class="row">
<?php $i=0;
for ($i=0; $i<8; $i++){
   echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][$i].'">';
   echo '<b>abcd<br />'.$_POST['name_color'][$i].'</b>';
   ?>
  </div>
 <?php
} ?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
