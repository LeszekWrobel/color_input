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
    <input type="color" name="favcolor" value="#000000"><input type="text" name="name_color">
    </div>
    <!-- <div class="">
      <input type="color" name="favcolor[]" value="#000000"><input type="text" name="name_color">
    </div>
    <div class="">
      <input type="color" name="favcolor[]" value="#000000"><input type="text" name="name_color">
    </div> -->

  <input type="submit">
</form>

<p><b>Note:</b> type="color" is not supported in Internet Explorer 11 and earlier versions or Safari 9.1 and earlier versions.</p>
<?php
if (isset($_POST['favcolor'])){
	$value = $_POST['favcolor'];
  $name_color = $_POST['name_color'];
	print '<b style="color: '.$value.'">Your favorite color is : '. $value.'</b><br />';
	//print '<img style="color: red" src="green.jpg">';
	print '<input type="text" style="background-color:'.$value.'" size="10px" placeholder=" '.$name_color.'"></input>';
  print $name_color;
  // foreach( $value as $valu)
	// 		if($valu!='' )
	// 		{
	// 			print $valu.' | ';
	// 			//print '<img src='.$value.'  height="30px"> ';
	// 			$i++;
	// 		}
}
?>
<div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
</body>
</html>
