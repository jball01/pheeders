<div class="roster-wrapper col-xs-12">
	
	<div class="roster">
		<h3 class="roster-title">Roster</h3>
		<ul>
		<?php foreach($player_names as $roster_a): ?>
			<li><?php print_r($roster_a); ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
	
	<div class="roster">
		<h3 class="roster-title">Player IDs</h3>
		<ul>
		<?php foreach($player_ids as $roster_a): ?>
			<li><?php print_r($roster_a); ?></li>
		<?php endforeach; ?>
		</ul>
	</div>

	<div class="roster">
		<h3 class="roster-title">Player Info</h3>
		<ul>
		<?php foreach($player_info as $roster_a): ?>
			<li><?php print_r($roster_a); ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>