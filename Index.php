<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="process.php" method="POST" enctype="multipart/form-data">
  <input type='text' name='username' />
  <br>
  <br>
  <input type='file' name='pictures' />
  <br>
  <br>
  <input type='submit' value='Save name' name='upload'>
</form>
</body>
</html>
