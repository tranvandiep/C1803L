<!DOCTYPE html>
<html>
<head>
	<title>Laravel test</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Thong tin sinh vien
		</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>User Name</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
<?php
for ($i = 0; $i < count($dataList); $i++) {
	echo '<tr>
				<td>'.$dataList[$i]['no'].'</td>
				<td>'.$dataList[$i]['username'].'</td>
				<td>'.$dataList[$i]['email'].'</td>
			</tr>';
}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>