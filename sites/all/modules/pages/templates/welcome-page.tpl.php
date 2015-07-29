<div class="roster-wrapper col-xs-12">
	
	<div class="roster">
		<h3 class="roster-title">Roster</h3>
		<table style="width: 100%">
			<tr>
				<th>Username</th>
				<th>Primary Role</th>
				<th>Secondary Role</th>
			</tr>
		<?php foreach($player_names as $roster_a): ?>
			<tr>
				<td><?php print_r($roster_a); ?></td>
				<td><?php print_r($player_roles[$roster_a]['primary']); ?></td>
				<td><?php print_r($player_roles[$roster_a]['secondary']);?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>
	
</div>