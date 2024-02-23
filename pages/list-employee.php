<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo EMS_PLUGIN_URL ?>css/bootstrap.min.css">
  <link href="<?php echo EMS_PLUGIN_URL ?>css/datatables.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<div class="panel panel-primary">
					<div class="panel-heading">List Employee</div>
					<div class="panel-body">
						<table class="table table-bordered" id="tbl-employee">
							<thead>
								<tr>
									<th>#ID</th>
									<th>#Name</th>
									<th>#Email</th>
									<th>#Gender</th>
									<th>#Designation</th>
									<th>#Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Example User</td>
									<td>john@example.com</td>
									<td>Male</td>
									<td>PHP Developer</td>
									<td>
										<a href="javascript:void(0)" class="btn btn-warning">Edit</a>
										<a href="javascript:void(0)" class="btn btn-danger">Delete</a>
										<a href="javascript:void(0)" class="btn btn-info">View</a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Example User</td>
									<td>john@example.com</td>
									<td>Male</td>
									<td>PHP Developer</td>
									<td>
										<a href="javascript:void(0)" class="btn btn-warning">Edit</a>
										<a href="javascript:void(0)" class="btn btn-danger">Delete</a>
										<a href="javascript:void(0)" class="btn btn-info">View</a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Example User</td>
									<td>john@example.com</td>
									<td>Male</td>
									<td>PHP Developer</td>
									<td>
										<a href="javascript:void(0)" class="btn btn-warning">Edit</a>
										<a href="javascript:void(0)" class="btn btn-danger">Delete</a>
										<a href="javascript:void(0)" class="btn btn-info">View</a>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Example User</td>
									<td>john@example.com</td>
									<td>Male</td>
									<td>PHP Developer</td>
									<td>
										<a href="javascript:void(0)" class="btn btn-warning">Edit</a>
										<a href="javascript:void(0)" class="btn btn-danger">Delete</a>
										<a href="javascript:void(0)" class="btn btn-info">View</a>
									</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

  <script src="<?php echo EMS_PLUGIN_URL ?>js/jquery.min.js"></script>
  <script src="<?php echo EMS_PLUGIN_URL ?>js/bootstrap.min.js"></script>
  <script src="<?php echo EMS_PLUGIN_URL ?>js/dataTables.min.js"></script>

  <script> 
    $(function(){
      new DataTable('#tbl-employee');
    });
  </script>

</body>
</html>


<?php
