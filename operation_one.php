<?php
class OperationOne
{
    // property declaration
		public $var_1;
		public $var_2;
		
	public function __construct( $var_1, $var_2 ){
        $this->var_1 = $var_1;
        $this->var_2 = $var_2;
    }

    // method declaration	
	public function multiplication() {
        return $this->var_1 * $this->var_2;
    }

    public function division() {
        return $this->var_1 / $this->var_2;
    }
}
$operation_one = new OperationOne(2,2);
echo "product : ";
echo $operation_one->multiplication();
echo "<br>";
echo "quotient : ";
echo $operation_one->division();
?>