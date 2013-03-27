<html>
	<head>
	<!--Load the AJAX API-->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">

	// Load the Visualization API and the piechart package.
	google.load('visualization', '1.0', {'packages':['corechart']});

	// Set a callback to run when the Google Visualization API is loaded.
	google.setOnLoadCallback(drawChart);

	// Callback that creates and populates a data table, 
	// instantiates the pie chart, passes in the data and
	// draws it.
	function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Topping');
		data.addColumn('number', 'Slices');
		data.addRows([
			['Mushrooms', 3],
			['Onions', 1],
			['Olives', 1], 
			['Zucchini', 1],
			['Pepperoni', 2]
		]);

		// Set chart options
		var options = {'title':'How Much Pizza I Ate Last Night',
			'width':400,
			'height':300,
			colors:['red','blue','yellow','green','brown']
		};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

		function selectHandler() {
			var selectedItem = chart.getSelection()[0];
			if (selectedItem) {
				var topping = data.getValue(selectedItem.row, 0);
				alert('The user selected ' + topping);
			}
		}

		google.visualization.events.addListener(chart, 'select', selectHandler);    
		chart.draw(data, options);
	}

	</script>
</head>
<body>
	<form action= "" method= "POST">
		Enter the values for operation 1: <br />
		Variable 1:<input type='text' name='txt1' /> <br /><br />
		Variable 2:<input type='text' name='txt2' /><br /><br />
		<input type='submit' name='submit' value='submit'/>
	</form>
	<!--Div that will hold the pie chart-->
	
</body>
</html>

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
		return $this->var_1 / $this->var_2;
	}
}
if(isset($_POST['txt1']) && isset($_POST['txt2'])){
$var1 = (filter_var($_POST['txt1'], FILTER_SANITIZE_NUMBER_INT)); 
$var2 = (filter_var($_POST['txt2'], FILTER_SANITIZE_NUMBER_INT));

if(($var1 != "") && ($var2 != "")){
echo "<b>Operation Name: </b>Operation One";
echo "<br>";
echo "<b>Number of Variables: </b>2";
echo "<br>";
$operation_one = new TwoVariables($var1,$var2);
echo "<b>Multiplication: </b>";
echo $operation_one->multiplication();
echo "<br>";
echo "<b>Division: </b>";
echo $operation_one->division();
echo "<br/>";
echo "HELLO!";
echo '<div id="chart_div" style="width:400; height:300"></div>	';
}
}
?>



