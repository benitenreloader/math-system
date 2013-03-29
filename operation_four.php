<?php include('style.php'); ?>
<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

require 'library/mathoperation.class.php';

class OperationFourCustom extends OperationFour
{
	function __construct($a, $b, $c, $d, $e) {
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		$this->d = $d;
		$this->e = $e;
	}
	
	public function multiplication() {
		return $this->a * $this->b * $this->c * $this->d * $this->e;
	}
	
	public function subtraction() {
		return $this->a - $this->b - $this->c - $this->d - $this->e;
	}
}

$obj = new OperationFourCustom(20, 3, 2, 4, 1);

$product = $obj->multiplication();
echo $product . '<hr />';

$difference = $obj->subtraction();
echo $difference;
?>
