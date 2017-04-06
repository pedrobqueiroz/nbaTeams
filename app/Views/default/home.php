<?php $this->layout('layoutBootstrap', ['title' => 'Home', 'currentPage' => 'home']) ?>

<?php $this->start('main_content') ?>
	<?php debug($w_user); ?>
	<h2>Ho-Home-Homey</h2>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
	<p><a href="<?= $this->url('default_contact') ?>">Contact</a></p>
	<p><a href="<?= $this->url('conference_east') ?>">East Conference</a></p>
	<p><a href="<?= $this->url('conference_west') ?>">Ouest Conference</a></p>
<?php $this->stop('main_content') ?>
