<?php $this->layout('layoutBootstrap', ['title' => 'Sign In', 'currentPage' => 'signin']) ?>

<?php $this->start('main_content') ?>
<h1>Ring ring ring!</h1>
<form action="" method="post">
	<fieldset>
		<input type="email" class="form-control" name="emailToto" value="" placeholder="Email address" /><br />
		<input type="password" class="form-control" name="passwordToto1" value="" placeholder="Your password" /><br />
		<input type="submit" class="btn btn-success btn-block" value="Sign in" />
	</fieldset>
</form>
<?php $this->stop('main_content') ?>