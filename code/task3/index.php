<!DOCTYPE html>

<head>
	<title>Electricity Bill Calculator</title>
  <meta name="description" content="My Name is Miran Ul Haq and this is my web programming assignment 2.">
</head>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' units - ' . $result;
    }
}

function calculate_bill($units) {
    $first_unit_cost = 3.50;
    $second_unit_cost = 4.00;
    $third_unit_cost = 5.20;
    $fourth_unit_cost = 6.50;

    if($units <= 50) {
        $bill = $units * $first_unit_cost;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $first_unit_cost;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $second_unit_cost);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $second_unit_cost);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $third_unit_cost);
    }
    else {
        $temp = (50 * 3.5) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourth_unit_cost);
    }
    return number_format((float)$bill, 2, '.', '');
}

?>

<body>
	<div id="page-wrap">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
</body>
</html>
