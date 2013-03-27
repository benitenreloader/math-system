<?php
include('library/mathoperation.class.php');

class Threevar extends OperationTwo
{
    // property declaration
  public $var_1;
  public $var_2;
  public $var_3;
  
 public function __construct( $var_1, $var_2, $var_3 ){
        $this->var_1 = $var_1;
        $this->var_2 = $var_2;
		$this->var_3 = $var_3;
    }

    // method declaration 
 public function division() {
        return $this->var_1 / $this->var_2 / $this->var_3;
    }

    public function addition() {
        return $this->var_1 + $this->var_2 + $this->var_3;
    }
}
$operation_two = new Threevar(3,3,1);
echo "Operation Name : Operation Two";
echo "<br>";
echo "Number of Variables : 3";
echo "<br>";
echo "Division : ";
echo $operation_two->division();
echo "<br>";
echo "Addition : ";
echo $operation_two->addition();
?>