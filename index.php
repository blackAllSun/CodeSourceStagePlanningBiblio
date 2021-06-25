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
$(document).ready(function(){
	$('.add').on({
	    mouseenter: function(){
	      $(this).css("background-color", "blue");
	     }, 
	    mouseleave: function(){
	       $(this).css("background-color", "red");
	    }, 
	    click: function(e){
	      $(this).css("background-color", "yellow");
	    	var dataId = $(this).data("id");
	    	var increment =dataId+1;
	    	console.log("dataId:after click "+dataId);
	    	console.log("increment:after click "+increment);
	    	$('.add').fadeOut(400);
	    	console.log("dataId:after fadeOut "+dataId);
	    	console.log("increment:after fadeOut "+increment);
	    	var temp=$("tr[class=attr"+ dataId +"]").clone();
	    	console.log(temp);
	    	temp.attr('class', "attr"+ increment);
	    	temp.appendTo($('table'));
	    	console.log("dataId:after clone "+dataId);
	    	console.log("increment:after clone "+increment);
	    	//recuperer data-id du bouton créé
	    	
	    	var temp2=$(".add[data-id="+ dataId +"]");
	    	console.log("test temp2 "+temp2);
	    	temp2.attr('data-id',increment);
	    	console.log("test temp2 after "+temp2);

	    } 
	  });


});

</script>
 
</body>
</html>
