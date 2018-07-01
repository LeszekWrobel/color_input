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
for ($i=0; $i<8; $i++){// wyświetlamy 8 pol wyboru koloru w formularzu.
?>   <div class="color" style="float:left; padding: 5px;"> <!-- ustawiamy pola liniowo -->
      <input type="color" name="favcolor[]"  value="#ffffff"  style="cursor: pointer"><input type="text" name="name_color[]" size="5px" placeholder="opis koloru">
    </div>
<?php   } ?> <!-- koniec pętli for -->
  <div class="color" style="float:left; padding: 5px;">
    <input type="submit">
  </div>
</div>
</form>
<div class="" style="clear:both"></div>
<p><b>Note:</b> type="color" is not supported in Internet Explorer 11 and earlier versions or Safari 9.1 and earlier versions.</p>
<?php
if (isset($_POST['favcolor'])){ //wyświetlamy dane z formularza w pętli foreach w formie tekstowej
foreach( $_POST['name_color'] as $name_color)
if ($name_color != '') {print $name_color.' | ';} // aby seperatory nie były wyświetlane gdy polo koloru jest puste
foreach( $_POST['favcolor'] as $val)
  if ($val != '#ffffff') {	print $val.' | ';}//aby puste (białe) inputy kolorów nie były wyswietlane
}
if (isset($_POST['favcolor'])&&($_POST['name_color'])){
?>
<div class="container">
  <div class="row">
    <!-- <div class="col-sm-6" > <!-- dwa dodatkowe div-y aby wyświetlić wynik na 1/2 strony -->
        <!-- <div class="row">  -->
<?php
$i=0;$ilosc_kolorow=0;
for ($i=0; $i<8; $i++){////wyświetlamy dane z formularza w pętli for w formie graficznej (opis koloru na podkładzie w wybranym kolorze)
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
      <!-- </div>
    </div> -->
  </div>
</div>
<?php
} ?>
</body>
</html>
