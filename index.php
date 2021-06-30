<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>clone demo</title>
  <script src="jquery-3.5.1.min.js"></script>
  <style>
.add[data-id='1'] {display:none;}
.add[data-id='2'] {display:none;}
.add[data-id='3'] {display:none;}
.add[data-id='4'] {display:none;}
</style>
</head>
<body>
 <table>
<?php
$data=array(1,2,3,4,5);
foreach($data as $d) { 
  //  if($d==5)
    ?>
	<tr class="attr<?php echo $d;?>"><td><input type="text"></td></tr>
<?php 
/*} else {
        
    }*/
} ?>
</table>
<button class='add' type='button'>+</button>
<script>
//chercher comment passer id  button par fonction dans methode onclick de la balise button
$(document).ready(function(){

	$('.add').bind( "click", function( event ){  	

    	var ligne = "<tr class='attr"+6+"'><td><input type='text'></td></tr>";
    	$("table").append(ligne);
		});

});

</script>
 
</body>
</html>
Aucun planning de présence enregistré pour cette période - calcul impossible.
