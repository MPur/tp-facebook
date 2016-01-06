	<div class="panel panel-default">
		<div class="panel-heading">Nom de l'utilisateur</div>
		<div class="panel-body">

			<div class="message">
				Contenu du message <button class="btn btn-default right">Je kiff <i class="glyphicon glyphicon-thumbs-up"></i></button>
			</div>

			<div class="commentaires">
				@include('comment.single')
			</div>

			<form class="padding">
				<div class="input-group">
					<div class="input-group-btn">
		 				<button class="btn btn-primary">Commenter</button>
					</div>
					<input class="form-control" placeholder="Ajouter un commentaire" type="text">
				</div>
			</form>
		</div>
	</div>
