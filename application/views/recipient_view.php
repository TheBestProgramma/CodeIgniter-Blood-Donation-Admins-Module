<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  	Bootstrap 
  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

	<div class="panel panel-default">
		<div class="panel-heading"><h3><b>Choose a Blood Donor</b></h3></div>
		<table class="table table-striped"> 
			<thead> 
				<tr> 
					<th>Donor ID</th>  
					<th>Blood Type</th>
					<th>Status</th> 
					<th>Operations</th> 
				</tr>
			</thead> 
		<?php
			if($fetch_data->num_rows()>0){
				foreach($fetch_data->result() as $row){
					?>
						<tr>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->type; ?></td>
							<td><?php echo $row->status; ?></td>
							<td><a href ="index.php/request">Request</a> </td>
						</tr>
					<?php
				}
			}
			else{
				?>
					<tr>
						<td colspan = "3">No Data Found</td>
					</tr>
				<?php
			}
		?>
		</table>
	</div>

</body>
</html>