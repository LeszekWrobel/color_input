<!DOCTYPE html>
<html>
<body>

<h2>Color Picker</h2>
<p>The <strong>input type="color"</strong> is used for input fields that should contain a color.</p>
<p>Depending on browser support:<br>A color picker can pop-up when you enter the input field.</p>

<form action="" >
  Select your favorite color:
  <input type="color" name="favcolor" value="#000000">
  <input type="submit">
</form>

<p><b>Note:</b> type="color" is not supported in Internet Explorer 11 and earlier versions or Safari 9.1 and earlier versions.</p>
<?php
if (isset($_GET['favcolor'])){
	$value = $_GET['favcolor'];
	print '<b style="color: '.$value.'">Your favorite color is : '. $value.'</b><br />';
	//print '<img style="color: red" src="green.jpg">';
	print '<input type="text" style="background-color:'.$value.'" size="10px">aaaa</input>';
}
?>
</body>
</html>
