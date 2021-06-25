<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>clone demo</title>
  <script src="jquery-3.5.1.min.js"></script>
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


    $('.add').click( function(e){ 
    	var dataId = $(this).data("id");
    	var increment =dataId+1;
    	console.log("dataId:after click "+dataId);
    	console.log("increment:after click "+increment);
    	$('.add').fadeOut(5);
    	console.log("dataId:after fadeOut "+dataId);
    	console.log("increment:after fadeOut "+increment);
    	var temp=$("tr[class=attr"+ dataId +"]").clone();
    	console.log(temp);
    	temp.attr('class', "attr"+ increment);
    	//recuperer data-id du bouton créé
    	var temp2=$("button[data-id="+ dataId +"]");
    	console.log("test temp2 "+temp2);
    	temp2.attr('data-id',increment);
    	console.log("test temp2 after "+temp2);
    	temp.appendTo($('table'));
    	console.log("dataId:after clone "+dataId);
    	console.log("increment:after clone "+increment);
    });
});

</script>
 
</body>
</html>