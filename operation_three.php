<?php

include 'library/mathoperation.class.php';

class OperationThree_min extends OperationThree
{
        public $var_1;
        public $var_2;
		public $var_3;
		public $var_4;

        public function __construct( $var_1, $var_2, $var_3, $var_4 )
        {
                $this->var_1 = $var_1;
                $this->var_2 = $var_2;
				$this->var_3 = $var_3;
				$this->var_4 = $var_4;
        }

        public function addition()
        {
                return $this->var_1 + $this->var_2 + $this->var_3 + $this->var_4;
        }

        public function subtraction()
        {
                return $this->var_1 - $this->var_2 - $this->var_3 - $this->var_4;;
        }
}

$operation_one = new OperationThree_min(100, 3, 2, 1);
echo "Operation Name: Operation Three";
echo "<br> Number of Variables: 4";
echo "<br> Addition: ";
echo $operation_one->addition();
echo "<br> Subtraction: ";
echo $operation_one->subtraction();