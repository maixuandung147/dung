<h1>LIST USER</h1>
<table>
	<tr>
		<td>Name</td>
		<td>Age</td>
		<td><?php $cate['ba']; ?></td>
	</tr>
	<?php foreach ($listUser as $user): ?>
	<tr>
		
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['age']; ?></td>
		
	</tr>
	<?php endforeach; ?>
	
</table>