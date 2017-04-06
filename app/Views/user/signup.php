<?php $this->layout('layoutBootstrap', ['title' => 'Sign Up', 'currentPage' => 'signup']) ?>

<?php $this->start('main_content') ?>



<form action="" method="post">
	<fieldset>
		<input type="email" class="form-control" name="emailToto" value="" placeholder="Email address" /><br />
		<input type="password" class="form-control" name="passwordToto1" value="" placeholder="Your password" /><br />
		<input type="password" class="form-control" name="passwordToto2" value="" placeholder="Confirm your password" /><br />
		<input type="submit" class="btn btn-success btn-block" value="Sign up" />
	</fieldset>
</form>

<?php $this->stop('main_content') ?>