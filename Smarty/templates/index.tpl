	
	{include file='header.tpl'}
	{literal}
	<style>
	
	.row{
		margin-top:10px;
	}
	
	</style>
	{/literal}
	<br/></br>
	
	<div class='pull-right'><a href='#' class='btn btn-primary'><span class='glyphicon glyphicon-briefcase'></span> Employer Access <span class='glyphicon glyphicon-chevron-right'></span></a>
	</div>

	</br></br>
	<div class='alert alert-info'>
	<form class="form-inline" role="form" method='POST' action='jobs.php'>
		<div class='row'>
		<div class="form-group col-md-4">
			<label for="keywords">Keywords</label>
			<input type="keywords" class="form-control" name="keywords" placeholder="Enter keyword(s)">
		</div>
		<div class="form-group col-md-4">
			<label for="classification">Classifications</label>
			<select class="form-control" name='classification'>
				<option value='All'>Any Classifications</option>
				{$classifications}
			</select>
		</div>
		<div class="form-group col-md-4">
			<label for="location">Location</label>
			<select class="form-control" name='location'>
			  <option value='0'>All Australia</option>
			  <optgroup label='Major Cities'>
				{$capitals}
			  </optgroup>
			  <optgroup label='Regional'>
				{$states}
			  </optgroup>
			</select>
		</div>
		</div>
		<div class='row'>
		<div class="form-group col-md-2">
			<label for="minSalary">Min. Salary</label>
			<select class="form-control" name='minSalary'>
			</select>
		</div>
		
		<div class="form-group col-md-2">
			<label for="maxSalary">Max. Salary</label>
			<select class="form-control" name='maxSalary'>
			</select>
		</div>
		
		<div class="form-group col-md-4">
			<label for="subClass">Sub-Classification</label>
			<select class="form-control" name='subClass'>
				<option value='0'>Any Sub-Classifications</option>
			</select>
		</div>
		
		<div class="form-group col-md-4">
			<label for="area">Area</label>
			<select class="form-control" name='area'>
				<option value='0'>Any Area</option>
			</select>
		</div>
		</div>
		<div class='row'>
			<div class='col-md-4'>
				<label for="workType">Work Type</label>
				<select class="form-control" name='workType'>
				<option value='0'>Any work type</option>
			</select>
			</div>
			
			<div class='col-md-4'></div>
			
			<div class='col-md-4'>
				<button type="submit" class="btn btn-primary pull-right" style='margin-top:20px'>
					<span class="glyphicon glyphicon-search"></span> Search
				</button>
			</div>
		</div>
	</form>
	</div>
	
	<div class="jumbotron">
	  <div class="container">
		<h1>Hello again.</h1>
		<p>Come here often? Register for a faster, more personalised experience.</p>
		<p><a class="btn btn-primary btn-lg" href="register.php">Register Now</a></p>
	  </div>
	</div>	
	
	<div class='well'>
	
			<b>Browse jobs by:</b>
			<div class='row'>
				<div class='col-md-2'>
					Classification
				</div>
				<div class='col-md-10'>
					Example | Example | Example
				</div>
			</div>
			<div class='row'>
				<div class='col-md-2'>
					Major Cities
				</div>
				<div class='col-md-10'>
					Example | Example | Example
				</div>
			</div>
			<div class='row'>
				<div class='col-md-2'>
					Salary
				</div>
				<div class='col-md-10'>
					Example | Example | Example
				</div>
			</div>
			<div class='row'>
				<div class='col-md-2'>
					Advertisers
				</div>
				<div class='col-md-10'>
					Example | Example | Example
				</div>
			</div>

			
		</div>
	{include file='footer.tpl'}