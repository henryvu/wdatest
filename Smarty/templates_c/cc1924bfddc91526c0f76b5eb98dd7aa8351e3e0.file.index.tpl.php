<?php /* Smarty version Smarty-3.1.14, created on 2013-09-21 16:14:54
         compiled from "Smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29952523d4dd53cf719-80718898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1924bfddc91526c0f76b5eb98dd7aa8351e3e0' => 
    array (
      0 => 'Smarty\\templates\\index.tpl',
      1 => 1379772882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29952523d4dd53cf719-80718898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523d4dd5429701_84533805',
  'variables' => 
  array (
    'classifications' => 0,
    'capitals' => 0,
    'states' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523d4dd5429701_84533805')) {function content_523d4dd5429701_84533805($_smarty_tpl) {?>	
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
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
				<?php echo $_smarty_tpl->tpl_vars['classifications']->value;?>

			</select>
		</div>
		<div class="form-group col-md-4">
			<label for="location">Location</label>
			<select class="form-control" name='location'>
			  <option value='0'>All Australia</option>
			  <optgroup label='Major Cities'>
				<?php echo $_smarty_tpl->tpl_vars['capitals']->value;?>

			  </optgroup>
			  <optgroup label='Regional'>
				<?php echo $_smarty_tpl->tpl_vars['states']->value;?>

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
	<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>