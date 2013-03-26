<?php

include "library/mathoperation.class.php";

class TwoVariables extends OperationOne
{
        public $var_1;
        public $var_2;

        public function __construct( $var_1, $var_2 )
        {
                $this->var_1 = $var_1;
                $this->var_2 = $var_2;
        }

        public function multiplication()
        {
                return $this->var_1 * $this->var_2;
        }

        public function division()
        {
                return $this->var_1 / $this->var_2;
        }
}

echo "<b>Operation Name: </b>Operation One";
echo "<br>";
echo "<b>Number of Variables: </b>2";
echo "<br>";
$operation_one = new TwoVariables(2, 2);
echo "<b>Multiplication: </b>";
echo $operation_one->multiplication();
echo "<br>";
echo "<b>Division: </b>";
echo $operation_one->division();

?>