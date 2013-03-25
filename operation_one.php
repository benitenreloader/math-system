<?php

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

$operation_one = new TwoVariables(2, 2);
echo $operation_one->multiplication();
echo "<br>";
echo $operation_one->division();

?>