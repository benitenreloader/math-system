<html>
	<head>
	<!--Load the AJAX API-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
<style>
	.corner{
	border-radius:5px;
	}
</style>
	<form action="" method= "POST" id = "form_input">
		Enter the values for operation 1: <br />
		Variable 1:<input type='text' id="txt1" name='txt1' class='corner'/> <br /><br />
		Variable 2:<input type='text' id="txt2" name='txt2' class='corner'/><br /><br />		
		<input id = "submit" type="button" value="submit" />
	</form>
	<!--Div that will hold the pie chart-->
	<div id="chart_div" style="width:400; height:300"></div>
	<!--table for the output-->
	<table id="table"></table>	
		<script>
			jQuery(document).ready(function() {
				var var1 = jQuery("#txt1").val();
				var var2 = jQuery("#txt2").val();
     
			/* Block UI During an Ajax Request */
			jQuery(document).ajaxStart(
				jQuery.blockUI
				).ajaxStop(
			jQuery.unblockUI
			);
   
			jQuery("#submit").unbind("click");   
			jQuery("#submit").bind("click", function() {
				jQuery.post(
				"operation_one.php",
					{
					var1:
						jQuery("#txt1").val(),
					var2:
						jQuery("#txt2").val()
					},
				function(data) {
					jQuery("#table").html(data);
					$("#chart_div").css("display","inline");
				},
					"text"
				);
			});
  
			});

	
	</script>
</body>
</html>

