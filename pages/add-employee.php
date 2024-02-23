<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo EMS_PLUGIN_URL ?>css/bootstrap.min.css">


</head>
<body>

<div class="container">
   <div class="row">
      <div class="panel panel-primary">
         <div class="panel-heading">Add Employee</div>

         <div class="panel-body">
            <form action="/action_page.php">
               <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
               </div>
               <div class="form-group">
                  <label for="phoneNo">Phone No:</label>
                  <input type="text" class="form-control" id="phoneNo" placeholder="Enter Phone" name="phoneNo">
               </div>
               <div class="form-group">
                  <label for="gender">Gender:</label>
                  <select name="gender" class="form-control" id="gender">
                     <option value="">Select gender</option>
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="designation">Designation:</label>
                  <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation">
               </div>
               <button type="submit" class="btn btn-success">Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>

</body>
</html>
