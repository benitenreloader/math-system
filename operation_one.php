<?php
include "library/mathoperation.class.php";

class TwoVariables extends OperationOne
{
	public $var_1;
	public $var_2;

	public function __construct($var_1, $var_2) {
		$this->var_1 = $var_1;
		$this->var_2 = $var_2;
	}

	public function multiplication() {
		return $this->var_1 * $this->var_2;
	}

	public function division() {
		return $this->var_1 / ($this->var_2);
	}
}

//if(isset($_POST['var1']) && isset($_POST['var2'])){
$var1 = (filter_var($_POST["var1"], FILTER_SANITIZE_NUMBER_INT)); 
$var2 = (filter_var($_POST["var2"], FILTER_SANITIZE_NUMBER_INT));



$operation_one = new TwoVariables($var1,$var2);

$fr = "";

$fr = "<thead class='content'>";
$fr .= "<tr>";
$fr .= "<th width='80px'></th>";
$fr .= "<th 'width='150px'></th>";
$fr .= "</tr>";
$fr .= "</thead>";
$fr .= "<tbody>";
$fr .= "<tr>";
$fr .= "<td class='content-fr-center'>Operation Name:</td>";
$fr .= "<td class='content-fr-center'>Operation One</td>";
$fr .= "</tr>";
$fr .= "<tr>";
$fr .= "<td class='content-fr-center'>Number of Variables:</td>";
$fr .= "<td class='content-fr-center'>2</td>";
$fr .= "</tr>";
$fr .= "<tr>";
$fr .= "<td class='content-fr-center'>Multiplication:</td>";
$fr .= "<td class='content-fr-center'>".$operation_one->multiplication()."</td>";
$fr .= "</tr>";
$fr .= "<tr>";
$fr .= "<td class='content-fr-center'>Division:</td>";
$fr .= "<td class='content-fr-center'>".$operation_one->division()."</td>";
$fr .= "</tr>";
$fr .= "<tr>";
$fr .= "<td class='content-fr-center'>HELLO</td>";
$fr .= "<td class='content-fr-center'></td>";
$fr .= "</tr>";
$fr .= "</tbody>";
				
header("content-type: text/xml");
echo $fr;

//}
?>