<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>clone demo</title>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
 <table>
<?php
$data=array(1,2,3);
foreach($data as $d) { ?>
	<tr class="attr<?php echo $d;?>"><td><input type="text"></td><td><button class='add' type="button" data-id="<?php echo $d;?>">+</button></td></tr>
<?php } ?>
</table>
<script>

$(document).ready(function(){
    $('.add').click( function(e){ 
    	var dataId = $('.add').data("id");
    	$('.add').remove();
    	var increment =dataId+1;
        $("[class=attr"+increment+"]").clone().appendTo($('table'));
        
    	alert(e);
    });
});

</script>
 
</body>
</html>