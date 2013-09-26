<?php require('header.inc'); ?>

	<div class="page-header">
	  <h1>Employer Registration <div class='pull-right'><small>Already registered?</small> <a href='login.php' class='btn btn-info'>Login here</a></div></h1>
		
	</div>

	<div class='alert alert-info'>
		<small>
		<b>
			<p>Register with GMP to gain access to Australia 's largest pool of jobseekers. It's free to register and you won't be charged until you post an ad.</p>
			<p>Please login if you've already registered, or register now to take advantage of GMP's easy-to-use job ad tools.</p>
		</b>	
		</small>
	</div>

	<form class="form-horizontal" role="form" action="users.php" method="POST">
	
	<div class="panel panel-default">
	  <div class=" panel-heading"><b>Login Details <div class='pull-right'><small>Required fields *</small></div></b></div>
	  <div class="panel-body">
	  
		<div class="form-group">
			<label for="username" class="col-lg-2 control-label">Username: *</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" name="username" placeholder="Username">
				<p class="help-block">7 - 30 letters and numbers.</p>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword1" class="col-lg-2 control-label">Password: *</label>
			<div class="col-lg-10">
				<input type="password" class="form-control" name="password" placeholder="Password">
				<p class="help-block">At least 7 characters.</p>
			</div>
		  </div>
		  
	  </div>

	  <div class="panel-heading"><b>Contact Details</b></div>
	  <div class="panel-body">
	  
		<div class="form-group">
			<label for="firstName" class="col-lg-2 control-label">First Name: *</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" name="firstName" placeholder="First Name">
			</div>
		</div>
		
		<div class="form-group">
			<label for="lastName" class="col-lg-2 control-label">Last Name: *</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" name="lastName" placeholder="Last Name">
			</div>
		</div>
		
		<div class="form-group">
			<label for="email" class="col-lg-2 control-label">Email Address: *</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" name="email" placeholder="Email Address">
				<p class="help-block">E.g. name@company.com.au</p>
			</div>
		</div>
		
		<div class="form-group">
			<label for="phone" class="col-lg-2 control-label">Phone Number: *</label>
			<div class="col-lg-10">
			  <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
			</div>
		  </div>
	  </div>
	  
	  <div class="panel-heading"><b>Company Details</b></div>
	  <div class="panel-body">
	  
		<div class="form-group">
			<label for="companyName" class="col-lg-2 control-label">Company Name: *</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" name="companyName" placeholder="Company Name">
				<p class="help-block">As it will appear on your job ads.</p>
			</div>
		</div>
		
		<div class="form-group">
			<label for="postalAddress" class="col-lg-2 control-label">Postal Address: *</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" name="postalAddress" placeholder="Postal Address">
			</div>
		</div>
		
		<div class="form-group">
			<label for="suburb" class="col-lg-2 control-label">Suburb: *</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" name="suburb" placeholder="Suburb">
			</div>
		</div>
		
		<div class="form-group">
			<label for="state" class="col-lg-2 control-label">State: *</label>
			<div class="col-lg-10">
			  <select id='state' class="form-control">
				<option disabled>Select a state</option>
			  </select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="postcode" class="col-lg-2 control-label">Postcode: *</label>
			<div class="col-lg-2">
			  <input type="text" class="form-control" name="postcode" placeholder="Postcode">
			</div>
		</div>
		
		<div class="form-group">
			<label for="country" class="col-lg-2 control-label">Country: *</label>
			<div class="col-lg-10">
			  <select id='country' class="form-control">
				<option disabled>Select a country</option>
			  </select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="empNumber" class="col-lg-2 control-label">Number of employees: *</label>
			<div class="col-lg-10">
			  <select id='empNumber' class="form-control">
				<option disabled>Select number of employees</option>
			  </select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="industry" class="col-lg-2 control-label">Industry: *</label>
			<div class="col-lg-10">
			  <select id='industry' class="form-control">
				<option disabled>Select an industry</option>
			  </select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="empType" class="col-lg-2 control-label">Employer Type: *</label>
			<div class="col-lg-10">
			  <select id='empType' class="form-control">
				<option disabled>Select employer type</option>
			  </select>
			</div>
		</div>
		
		<div class="form-group">
			<div class='col-lg-2'></div>
			<div class="col-lg-10">
				<div class="checkbox">
					<label>
					  <input type="checkbox" name='terms'>I understand and accept GMP's <a href='#'>Terms & Conditions</a>
					</label>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class='col-lg-2'></div>
			<div class="col-lg-10">
				<button type="submit" class="btn btn-primary btn-lg">Submit</button>
			</div>
		</div>
		
	  </div>
	  
	</div>
</form>
<?php require('footer.inc'); ?>  
