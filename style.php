<style>
.blue #slatenav{position:relative;display:block;height:42px;font-size:11px;font-weight:bold;background:#93D517 repeat-x top left;font-family:Arial;text-transform:uppercase;}
.blue #slatenav ul{margin:0px;padding:0;list-style-type:none;width:auto;}
.blue #slatenav ul li{display:block;float:left;margin:0 1px 0 0;}
.blue #slatenav ul li a{display:block;float:left;color:#D5F1FF;text-decoration:none;padding:14px 22px 0 22px;height:28px;}
.blue #slatenav ul li a:hover,.blue #slatenav ul li a.current{color:#fff;background:#477104 no-repeat top center;}
</style>
	<div class="blue">
	<div id="slatenav">
	<ul>
		<li><a href="operation_one.php" <?php if((basename($_SERVER['REQUEST_URI'])) == "operation_one.php"){ ?> class="current" <?php } else { ?> class="" <?php } ?>>Operation1</a></li>
		<li><a href="operation_two.php" <?php if((basename($_SERVER['REQUEST_URI'])) == "operation_two.php"){ ?> class="current" <?php } else { ?> class="" <?php } ?>>Operation2</a></li>
		<li><a href="operation_three.php" <?php if((basename($_SERVER['REQUEST_URI'])) == "operation_three.php"){ ?> class="current" <?php } else { ?> class="" <?php } ?>>Operation3</a></li>
		<li><a href="operation_four.php" <?php if((basename($_SERVER['REQUEST_URI'])) == "operation_four.php"){ ?> class="current" <?php } else { ?> class="" <?php } ?>>Operation4</a></li>
		</ul>
		</div>
	</div>