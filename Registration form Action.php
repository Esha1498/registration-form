<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

		if($_SERVER["REQUEST_METHOD"] == "POST") {

			if(empty($_POST['name']) && empty($_POST['gender']) && empty($_POST['dob'])&& empty($_POST['religion'])&& empty($_POST['fname'])&& empty($_POST['mname'])&& empty($_POST['presentadd'])&& empty($_POST['permadd'])&& empty($_POST['phone'])&& empty($_POST['email'])&& empty($_POST['SSCYear'])&& empty($_POST['SSCInstitution'])&& empty($_POST['HSCYear'])&& empty($_POST['HSCInstitution'])) {
				echo "Fill the form properly";
			}
			else {
				echo $_POST['name'] . " " . $_POST['gender'] . " " .$_POST['dob'] . " " . $_POST['religion'] . " " . $_POST['fname'] . " " . $_POST['mname'] . " " . $_POST['presentadd'] . " " . $_POST['permadd'] . " " . $_POST['phone'] . " " . $_POST['email'] . " " . $_POST['SSCYear'] . " " . $_POST['SSCInstitution'] . " " . $_POST['HSCYear'] . " " . $_POST['HSCInstitution'] ;
			}
		}
		
	?>

</body>
</html>

    