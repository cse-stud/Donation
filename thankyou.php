<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Bharathi Ratna">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Thank you for your great generosity! </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h1 class="text-center">Thankyou!</h1>
				<?php
				include 'instamojo/Instamojo.php';
	
	$api =new  Instamojo\Instamojo('test_6365afbddcf06e820edcd9ba0af','test_7cc05261e245a2c01c91a84bd4e','https://test.instamojo.com/api/1.1/');
	$payid=$_GET['payment_request_id'];
	try{
		$response=$api->paymentRequestStatus($payid);
		?>
		<h2>Payment Details</h2>
		<table class="table table-bordered">
			<tr>
				<th>You have donated :</th>
				<td><?= $response['purpose']; ?></td>
			</tr>
			<tr>
				<th>Payment ID :</th>
				<td><?= $response['payments'][0]['payment_id']; ?></td>
			</tr>
			<tr>
				<th>Payee Name :</th>
				<td><?= $response['payments'][0]['buyer_name']; ?></td>
			</tr>
			<tr>
				<th>Payee Email :</th>
				<td><?= $response['payments'][0]['buyer_email']; ?></td>
			</tr>
		</table>
		<?php
	}
	catch(Exception $e){
		print("Error: ".$e->getMessage());
	}
	?>
</div>
</div>
</div>
</body>
</html>
			</div>
		</div>
	</div>
</body>
</html>