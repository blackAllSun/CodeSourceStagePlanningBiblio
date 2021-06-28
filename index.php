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
	<tr class="attr<?php echo $d;?>"><td><input type="text"></td><td><button class='add' type="button" data-id="<?php echo $d;?>">+</button></td></tr>
<?php 
/*} else {
        
    }*/
} ?>
</table>

<script>
//chercher comment passer id  button par fonction dans methode onclick de la balise button
$(document).ready(function(){

	$('.add').bind( "click", function( event ){  	
        var dataId = $(this).data("id");
    	var temp=$("tr[class=attr"+ dataId +"]").clone();	
    	var increment =parseInt(temp.attr('class').replace(/\D+/g,''))+1;
    	var temp2=$(".add[data-id="+dataId +"]");
    	dataId=increment;
    	console.log(increment);
		console.log("test temp2 "+temp.attr('class'));
		temp.attr('class','attr'+increment);
    	temp2.attr('data-id',increment);
    	console.log("test temp2 after "+temp2.attr('data-id'));
    	temp2.remove();
    	temp.appendTo($('table'));
		});

});

</script>
 
</body>
</html>
