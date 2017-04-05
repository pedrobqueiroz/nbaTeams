<p><a href="<?= $this->url('conference_east'); ?>">East Conference</a></p>

<?php $this->layout('layoutBootstrap', ['title' => 'East Conferece', 'currentPage' => 'east']) ?>

<?php $this->start('main_content') ?>
	<h2>East Conference</h2>
	<p>This is the East Conference</p>
	<p><a href="<?= $this->url('conference_west') ?>">West Conference</a></p>
	<p><a href="<?= $this->url('default_contact') ?>">Contact</a></p>
	<p><a href="<?= $this->url('default_home') ?>">Home</a></p>

	<p>Name of conference in DB: <?= $conferenceName?></p>

	<table class="table">
		<thead>
			<tr>
				<td>Team</td>
				<td>City</td>
				<td>Division</td>
			</tr>	
		</thead>
		<tbody>
			
		<?php foreach($allTeams as $currentTeam) : ?>
			<tr>
				<td><?= $currentTeam['tea_name'] ?></td>
				<td><?= $currentTeam['tea_ville'] ?></td>
				<td><?= $currentTeam['div_name'] ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php $this->stop('main_content') ?>