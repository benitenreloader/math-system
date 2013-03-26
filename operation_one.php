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

echo "Operation Name: Operation One";
echo "<br>";
echo "Number of Variables: 2";
echo "<br>";
$operation_one = new TwoVariables($_POST['txt1'],$_POST['txt2']));
echo "Multiplication: ";
echo $operation_one->multiplication();
echo "<br>";
echo "Division: ";
echo $operation_one->division();

?>