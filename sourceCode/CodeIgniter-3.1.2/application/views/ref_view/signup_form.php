<h1>Create an Account</h1>

<fieldset>
	<legend>Personal Infomation</legend>

	<?php
	echo form_open('ref_login/create_member');
	echo form_input('first_name',set_value('first_name','First_name'));
	echo form_input('last_name',set_value('last_name','Last_name'));
	echo form_input('email_address',set_value('email_address','Email_address'));
	?>

</fieldset>

<fieldset>
	<legend>Login Info</legend>

	<?php
	echo form_input('username',set_value('username','Username'));
	echo form_input('password',set_value('password','Password'));
	echo form_input('password2',set_value('password2','Password Confirmtion'));

	echo form_submit('submit','Create Account');
	?>

	<?php echo validation_errors('<p class="erorr">'); ?>

</fieldset>	
