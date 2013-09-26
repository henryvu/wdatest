<?php /* Smarty version Smarty-3.1.14, created on 2013-09-21 09:41:55
         compiled from "Smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14249523d4dc3e4d218-85972904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1924bfddc91526c0f76b5eb98dd7aa8351e3e0' => 
    array (
      0 => 'Smarty\\templates\\index.tpl',
      1 => 1379748250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14249523d4dc3e4d218-85972904',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523d4dc3e969b0_44747013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523d4dc3e969b0_44747013')) {function content_523d4dc3e969b0_44747013($_smarty_tpl) {?>	
	<style>
	
	.row{
		margin-top:10px;
	}
	
	</style>
	
	<br/></br>
	
	<div class='pull-right'><a href='#' class='btn btn-primary'><span class='glyphicon glyphicon-briefcase'></span> Employer Access <span class='glyphicon glyphicon-chevron-right'></span></a>
	</div>

	</br></br>
	<div class='alert alert-info'>
	<form class="form-inline" role="form">
		<div class='row'>
		<div class="form-group col-md-4">
			<label for="keywords">Keywords</label>
			<input type="keywords" class="form-control" id="keywords" placeholder="Enter keyword(s)">
		</div>
		<div class="form-group col-md-4">
			<label for="classification">Classifications</label>
			<select class="form-control" id='classification'>
				<option value='0'>Any Classifications</option>
			</select>
		</div>
		<div class="form-group col-md-4">
			<label for="location">Location</label>
			<select class="form-control" id='location'>
			  <option value='0'>All Australia</option>
			  <optgroup label='Major Cities'>
				
			  </optgroup>
			</select>
		</div>
		</div>
		<div class='row'>
		<div class="form-group col-md-2">
			<label for="minSalary">Min. Salary</label>
			<select class="form-control" id='minSalary'>
			</select>
		</div>
		
		<div class="form-group col-md-2">
			<label for="maxSalary">Max. Salary</label>
			<select class="form-control" id='maxSalary'>
			</select>
		</div>
		
		<div class="form-group col-md-4">
			<label for="subClass">Sub-Classification</label>
			<select class="form-control" id='subClass'>
				<option value='0'>Any Sub-Classifications</option>
			</select>
		</div>
		
		<div class="form-group col-md-4">
			<label for="area">Area</label>
			<select class="form-control" id='area'>
				<option value='0'>Any Area</option>
			</select>
		</div>
		</div>
		<div class='row'>
			<div class='col-md-4'>
				<label for="workType">Work Type</label>
				<select class="form-control" id='workType'>
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
<?php }} ?>