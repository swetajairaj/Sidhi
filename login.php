<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
			    <h2> Login form </h2>
			    <form action="validation.php" method="post">

				        <div class="form-group">
						   <label> Username </label>
						   <input type="text" name="user" class="form-control">
					    </div>

						<div class="form-group">
							<label> Password </label>
							<input type="Password" name="Password" class="form-control">
						</div>

					    <button type="submit" class="btn btn-primary"> Login </button>

			    </form>
		    </div>
		

 
			<div class="col-lg-6">
				<h2> Signup here </h2>
				<form action="regstration.php" method="post">

					<div class="form-group">
						<label> Username </label>
						<input type="text" name="user" class="form-control">
					</div>

					<div class="form-group">
						<label> Password </label>
						<input type="Password" name="Password" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary"> Signin </button>

				</form>
			</div>

</div>

</div>

</body>
</html>