<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Bharathi Ratna">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Donation Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-info">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 bg-light mt-5 rounded">
				<h2 class="text-center p-2">Don’t Delay Give Today!</h2>
				<form action="pay.php" method="post"  class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="dName" class="form-control" size="20" maxlength="20" autocomplete="off" tabindex="1" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="Email" name="demail" class="form-control" maxlength="40" size="12"  autocomplete="off" tabindex="3" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="number" name="dphnum" class="form-control" autocomplete="off" tabindex="5" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<input type="number" name="damount" class="form-control" autocomplete="off" tabindex="5" placeholder="Amount" required>
					</div>
					
						<div class="row justify-content-center">
				<div class="col-md-6 mt-3 p-4 bg-light rounded">
					<input type="submit" name="submit" value="Donate The Needy" class="btn btn-success btn-lg">
					
				</div>
			</div>
						
				</form>
			</div>
</body>
</html>