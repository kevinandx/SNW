<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$snw = rand(1,100);
 ?>
<script type="text/javascript" src="js/jquery-1.7.2.xxx.xxx.xxx.js"></script>
	<script type="text/javascript" src="js/jquery.xxx.xxx.xxx.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Random Scratch and Win Javascript with PHP Ticket</title>
	<style type="text/css">
	
.main,.scratchCard,.scratchCard canvas{
max-width:100%;
}
		.scratchCard canvas{
			background-size:contain;
		}
	</style>
	<script type="text/javascript">

		$(function(){
			$("#1").SNW({
				
				revealRadius:50,
				percentComplete:85,
				revealOnComplete:true,
				updateOnMouseMove:true,
				updateOnFingerMove:false,
			    onScratchComplete : function(percentScratched) {
//alert("<?php if ($snw < 33) {echo 'Sorry, You are not a winner.'; } elseif (($snw >= 34) && ($snw < 67)) {echo 'Congradutions, You won movie tickets!'; } elseif ($snw >= 67) {echo 'Congradutions, You won coke and popcorn!';} else {echo 'out of range';} ?>");
//document.location = "http://www.url.com", 10000;
setTimeout("location.href='http://<?php if ($snw < 33) {echo 'www.url.com?snw=janky'; } elseif (($snw >= 34) && ($snw < 67)) {echo 'www.url.com?snw=inky1'; } elseif ($snw >= 67) {echo 'www.url.com?snw=inky2';} else {echo 'out of range';} ?>'" ,10000);											  
			    },
				onUpdate:function(percentScratched) {
					$("#percentText1").html("Percent: "+percentScratched)
			    }
		});

			
		});

	
	</script>
</head>

<body>
<div id="1" class="scratchCard" data-backGroundImage="images/<?php
if ($snw < 33) {
    echo 'janky';
} elseif (($snw >= 34) && ($snw < 67)) {
    echo 'inky1';
}
elseif ($snw >= 67) {
    echo 'inky2';
} else {
    echo 'out of range';
}
?>.jpg" data-foreGroundImage="images/scratch2win.jpg">

	<p style="font-size:50px">LOADING</p>
    <img src="images/loading2.gif"/>
</div>
</body>
</html>
