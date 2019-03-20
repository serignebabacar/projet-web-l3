
<a href="?p=admin.categories.index" class="btn btn-success">Gerer les Categories</a>
<a href="?p=admin.users.index" class="btn btn-success">Gerer les utilisateurs</a>
 <h1>Ajouter/Supprimer/Editer  </h1>
 <p></p>
<a href="?p=admin.posts.add" class="btn btn-success">Ajouter</a>
<a href="?p=admin.users.index" class="btn btn-success">gestion des utilisateurs </a>
<a href="?p=admin.categories.index" class="btn btn-success">gestion des questionnaires </a>
<p></p>
<div class="panel panel-default">
	<div class="panel-heading">Utilisateurs </div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<td>Nom</td>
						<td>Type</td>
						<td>description</td>
						<td>latitude</td>
						<td>longitude</td>
						<td>NomQuestionnaire</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($posts as $post): ?>
						<tr>
						<td><?=$post->nom  ?></td>
						<td><?=$post->type  ?></td>
						<td><?=$post->description  ?></td>
						<td><?=$post->latitude  ?></td>
						<td><?=$post->longitude  ?></td>
						<td><?=$post->nomQuestionnaire  ?></td>
						<td>
							<a href="?p=admin.posts.edit&id=<?=$post->id  ?>"class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
							<form action="?p=admin.posts.delete" method="post" style="display: inline;">
								<input type="hidden" name="id" value="<?=$post->id  ?>">
								<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
							</form>
							
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>	