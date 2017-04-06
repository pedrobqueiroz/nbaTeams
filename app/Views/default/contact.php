<?php $this->layout('layoutBootstrap', ['title' => 'Contact', 'currentPage' => 'contact']) ?>

<?php $this->start('main_content') ?>
	<h2>Contact</h2>
	<p>This is the contact page</p>
	<p><a href="<?= $this->url('conference_east') ?>">East Conference</a></p>
	<p><a href="<?= $this->url('conference_west') ?>">Ouest Conference</a></p>
	<p><a href="<?= $this->url('default_home') ?>">Home</a></p>
<?php $this->stop('main_content') ?>