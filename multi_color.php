<!DOCTYPE html>
<html>
<body>
<a href="index.php"><input type="submit" name="submit" ">jeden kolor</input></a>
<h2>Color Picker</h2>

<form method="post" action="">
  Select your favorite color:
  <input type="color" name="favcolor" value="#000000">
  <input type="text" name="name_color">
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
}
?>
</body>
</html>
