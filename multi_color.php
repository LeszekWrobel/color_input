<!DOCTYPE html>
<html>
<head>
  <?php   require_once ('head.php') ?>
</head>
<body>
<a class="btn btn-outline-secondary" href="index.php" role="button">Jeden kolor</a>
<h2>Color Picker</h2>
Select color:
<form  method="post" action="" style="border: 2px solid #ccc;">
  <div class="">

<?php $i=0;
for ($i=0; $i<8; $i++){?>
    <div class="color" style="float:left; padding: 5px;">
      <input type="color" name="favcolor[]"  value="#ffffff"  style="cursor: pointer"><input type="text" name="name_color[]" size="5px" placeholder="opis koloru">
    </div>
<?php   } ?>
  <div class="color" style="float:left; padding: 5px;">
    <input type="submit">
  </div>
</div>
</form>
<div class="" style="clear:both">

</div>
<p><b>Note:</b> type="color" is not supported in Internet Explorer 11 and earlier versions or Safari 9.1 and earlier versions.</p>
<?php
if (isset($_POST['favcolor'])){
foreach( $_POST['name_color'] as $name_color)
          print $name_color.' | ';
  foreach( $_POST['favcolor'] as $val)
						print $val.' | ';
}

if (isset($_POST['favcolor'])&&($_POST['name_color'])){
?>
<div class="container">
  <div class="row">
    <div class="col-sm-6" >
        <div class="row">
<?php
$i=0;$ilosc_kolorow=0;
for ($i=0; $i<8; $i++){//wyświetlamy opis koloru na podkładzie w wybranym kolorze
  if ($_POST['favcolor'][$i] != '#ffffff') {//aby puste (białe) inputy kolorów nie były wyswietlane
    echo '<div class="col-sm" style="background-color:'.$_POST['favcolor'][$i].'">';//background-color
    echo '<b>'.$_POST['name_color'][$i].'</b>'; //opis koloru
    $ilosc_kolorow++
    ?> </div>
<?php
  }
}
	echo '<br /><b> Ilość kolorów = '.$ilosc_kolorow.'</b>'; // Wyświetla ilość kolorów
?>
      </div>
    </div>
  </div>
</div>
<?php
} ?>
</body>
</html>
